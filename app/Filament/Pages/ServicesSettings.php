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
class ServicesSettings extends Page implements HasForms
{
    use InteractsWithForms;
    protected string $view = 'filament.pages.services-settings';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-squares-2x2';
    protected static string|\UnitEnum|null $navigationGroup = 'Page Content';
    public ?array $data = [];
    protected static ?int $navigationSort = 3;
    public function mount(): void
    {
        $this->form->fill([
            'eyebrow' => Setting::get('services', 'eyebrow'),
            'heading' => Setting::get('services', 'heading'),
            'body'    => Setting::get('services', 'body'),
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
            Setting::set('services', $key, $value ?? '');
        }
        Notification::make()->title('Saved')->success()->send();
    }
}
