<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['section_id', 'key', 'value'];
    public $timestamps = false;

    public static function get(string $section, string $key, $default = null): ?string
    {
        $sectionModel = Section::where("name", $section)->first();
        if (!$sectionModel) return $default;
        return static::where("section_id", $sectionModel->id)
            ->where("key", $key)
            ->value("value") ?? $default;
    }

    public static function set(string $section, string $key, string $value): void
    {
        $sectionModel = Section::firstOrCreate(['name' => $section]);
        static::updateOrCreate(
            ['section_id' => $sectionModel->id, 'key' => $key],
            ['value' => $value]
        );
    }

    public static function section(string $section): array
    {
        $sectionModel = Section::where('name', $section)->first();
        if (!$sectionModel) return [];
        return static::where('section_id', $sectionModel->id)
            ->pluck('value', 'key')
            ->all();
    }
}
