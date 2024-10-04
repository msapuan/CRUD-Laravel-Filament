<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PembangunanResource\Pages;
use App\Filament\Resources\PembangunanResource\RelationManagers;
use App\Models\Pembangunan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;

class PembangunanResource extends Resource
{
    protected static ?string $model = Pembangunan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no_spk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_pekerjaan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nilai_pekerjaan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tgl_mulai')
                    ->required(),
                Forms\Components\DatePicker::make('tgl_selesai')
                    ->required(),
                Forms\Components\TextInput::make('hari_tersisa')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('progress_pekerjaan')
                    ->options([
                        '10%' => '10%',
                        '25%' => '25%',
                        '50%' => '50%',
                        '75%' => '75%',
                        '85%' => '85%',
                        '100%' => '100%',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_spk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_pekerjaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nilai_pekerjaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tgl_mulai')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tgl_selesai')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hari_tersisa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('progress_pekerjaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('Export')
                        ->icon('heroicon-m-arrow-down-tray')
                        ->openUrlInNewTab()
                        ->deselectRecordsAfterCompletion()
                        ->action(function (Collection $records) {
                            return response()->streamDownload(function () use ($records) {
                                echo Pdf::loadHTML(
                                    Blade::render('pembangunan', ['records' => $records])
                                )->stream();
                            }, 'pembangunan.pdf');
                        }),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPembangunans::route('/'),
            'create' => Pages\CreatePembangunan::route('/create'),
            'edit' => Pages\EditPembangunan::route('/{record}/edit'),
        ];
    }
}
