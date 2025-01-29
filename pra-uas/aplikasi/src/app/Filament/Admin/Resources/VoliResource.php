<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\VoliResource\Pages;
use App\Filament\Admin\Resources\VoliResource\RelationManagers;
use App\Models\Voli;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VoliResource extends Resource
{
    protected static ?string $model = Voli::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_atlet')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('usia')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('posisi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tinggi')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('berat')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('performa')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('status_bertanding')
                    ->required()
                    ->maxLength(255)
                    ->default('Belum Bertanding'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_atlet')
                    ->searchable(),
                Tables\Columns\TextColumn::make('usia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('posisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tinggi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('performa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_bertanding')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListVolis::route('/'),
            'create' => Pages\CreateVoli::route('/create'),
            'edit' => Pages\EditVoli::route('/{record}/edit'),
        ];
    }
}
