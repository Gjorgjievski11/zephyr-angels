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
class CtaSettings extends Page implements HasForms
{
    use InteractsWithForms;
    protected string $view = 'filament.pages.cta-settings';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-megaphone';
    protected static string|\UnitEnum|null $navigationGroup = 'Page Content';
    public ?array $data = [];
    protected static ?int $navigationSort = 5;
    public function mount(): void
    {
        $this->form->fill([
            'eyebrow'       => Setting::get('cta', 'eyebrow'),
            'heading_white' => Setting::get('cta', 'heading_white'),
            'heading_teal'  => Setting::get('cta', 'heading_teal'),
            'description'   => Setting::get('cta', 'description'),
            'cta1_text'     => Setting::get('cta', 'cta1_text'),
            'cta1_url'      => Setting::get('cta', 'cta1_url'),
            'cta2_text'     => Setting::get('cta', 'cta2_text'),
            'cta2_url'      => Setting::get('cta', 'cta2_url'),
        ]);
    }
    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('eyebrow')->label('Eyebrow Text'),
            TextInput::make('heading_white')->label('Heading (White)'),
            TextInput::make('heading_teal')->label('Heading (Teal)'),
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
            Setting::set('cta', $key, $value ?? '');
        }
        Notification::make()->title('Saved')->success()->send();
    }
}
