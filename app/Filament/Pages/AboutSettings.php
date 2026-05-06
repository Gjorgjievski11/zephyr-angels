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
class AboutSettings extends Page implements HasForms
{
    use InteractsWithForms;
    protected string $view = 'filament.pages.about-settings';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-information-circle';
    protected static string|\UnitEnum|null $navigationGroup = 'Page Content';
    public ?array $data = [];
    protected static ?int $navigationSort = 2;
    public function mount(): void
    {
        $this->form->fill([
            'eyebrow' => Setting::get('about', 'eyebrow'),
            'heading' => Setting::get('about', 'heading'),
            'body'    => Setting::get('about', 'body'),
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('eyebrow')->label('Eyebrow Text'),
            TextInput::make('heading')->label('Heading'),
            Textarea::make('body')->label('Body')->rows(8)->columnSpanFull(),
        ])->statePath('data');
    }

    public function save(): void
    {
        foreach ($this->data as $key => $value) {
            Setting::set('about', $key, $value ?? '');
        }
        Notification::make()->title('Saved')->success()->send();
    }
}
