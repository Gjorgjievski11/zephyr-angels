<?php
namespace App\Filament\Pages;
use App\Models\Setting;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Schema;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
class FooterSettings extends Page implements HasForms
{
    use InteractsWithForms;
    protected string $view = 'filament.pages.footer-settings';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-text';
    protected static string|\UnitEnum|null $navigationGroup = 'Page Content';
    public ?array $data = [];
    protected static ?int $navigationSort = 5;
    public function mount(): void
    {
        $this->form->fill([
            'description'    => Setting::get('footer', 'description'),
            'email'          => Setting::get('footer', 'email'),
            'phone'          => Setting::get('footer', 'phone'),
            'address'        => Setting::get('footer', 'address'),
            'linkedin_url'   => Setting::get('footer', 'linkedin_url'),
            'instagram_url'  => Setting::get('footer', 'instagram_url'),
            'crunchbase_url' => Setting::get('footer', 'crunchbase_url'),
            'mail_url'       => Setting::get('footer', 'mail_url'),
        ]);
    }
    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            Textarea::make('description')->label('Description')->columnSpanFull(),
            TextInput::make('email')->label('Email'),
            TextInput::make('phone')->label('Phone'),
            Textarea::make('address')->label('Address'),
            TextInput::make('linkedin_url')->label('LinkedIn URL'),
            TextInput::make('instagram_url')->label('Instagram URL'),
            TextInput::make('crunchbase_url')->label('CrunchBase URL'),
            TextInput::make('mail_url')->label('Mail URL'),
        ])->statePath('data');
    }
    public function save(): void
    {
        foreach ($this->data as $key => $value) {
            Setting::set('footer', $key, $value ?? '');
        }
        Notification::make()->title('Saved')->success()->send();
    }
}
