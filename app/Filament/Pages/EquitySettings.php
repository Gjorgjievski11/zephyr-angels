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
class EquitySettings extends Page implements HasForms
{
    use InteractsWithForms;
    protected string $view = 'filament.pages.equity-settings';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-currency-dollar';
    protected static string|\UnitEnum|null $navigationGroup = 'Page Content';
    public ?array $data = [];
    protected static ?int $navigationSort = 4;
    public function mount(): void
    {
        $this->form->fill([
            'eyebrow'    => Setting::get('equity', 'eyebrow'),
            'heading'    => Setting::get('equity', 'heading'),
            'paragraph1' => Setting::get('equity', 'paragraph1'),
            'paragraph2' => Setting::get('equity', 'paragraph2'),
            'paragraph3' => Setting::get('equity', 'paragraph3'),
        ]);
    }
    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('eyebrow')->label('Eyebrow Text'),
            TextInput::make('heading')->label('Heading'),
            Textarea::make('paragraph1')->label('Paragraph 1'),
            Textarea::make('paragraph2')->label('Paragraph 2'),
            Textarea::make('paragraph3')->label('Paragraph 3'),
        ])->statePath('data');
    }
    public function save(): void
    {
        foreach ($this->data as $key => $value) {
            Setting::set('equity', $key, $value ?? '');
        }
        Notification::make()->title('Saved')->success()->send();
    }
}
