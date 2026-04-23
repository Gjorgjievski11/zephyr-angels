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

class HeroSettings extends Page implements HasForms
{
    use InteractsWithForms;
    protected string $view = 'filament.pages.hero-settings';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-home';
    protected static string|\UnitEnum|null $navigationGroup = 'Page Content';
    public ?array $data = [];
    protected static ?int $navigationSort = 1;
    public function mount(): void
    {
        $this->form->fill([
            'eyebrow'      => Setting::get('hero', 'eyebrow'),
            'heading_teal' => Setting::get('hero', 'heading_teal'),
            'heading_white'=> Setting::get('hero', 'heading_white'),
            'description'  => Setting::get('hero', 'description'),
            'cta1_text'    => Setting::get('hero', 'cta1_text'),
            'cta1_url'     => Setting::get('hero', 'cta1_url'),
            'cta2_text'    => Setting::get('hero', 'cta2_text'),
            'cta2_url'     => Setting::get('hero', 'cta2_url'),
        ]);
    }
    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('eyebrow')->label('Eyebrow Text'),
            TextInput::make('heading_teal')->label('Heading (Teal)'),
            TextInput::make('heading_white')->label('Heading (White)'),
            Textarea::make('description')->label('Description'),
            TextInput::make('cta1_text')->label('Button 1 Text'),
            TextInput::make('cta1_url')->label('Button 1 URL'),
            TextInput::make('cta2_text')->label('Button 2 Text'),
            TextInput::make('cta2_url')->label('Button 2 URL'),
        ])->statePath('data');
    }
    public function save(): void
    {
        foreach ($this->data as $key => $value) {
            Setting::set('hero', $key, $value ?? '');
        }
        Notification::make()->title('Saved')->success()->send();
    }
}
