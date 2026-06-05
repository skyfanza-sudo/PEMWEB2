<?php

namespace App\Filament\Resources\Trainings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TrainingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
<<<<<<< HEAD
                TextColumn::make('jenisTraining.nama_jenis')
                    ->label('Jenis Training')
=======
                TextColumn::make('jenis_training_id')
>>>>>>> a24a7b72be52e7b391d93f2cd8d7e1b4ce5d12b7
                    ->numeric()
                    ->sortable(),
                TextColumn::make('nama_training')
                    ->searchable(),
                TextColumn::make('penyelenggara')
                    ->searchable(),
                TextColumn::make('tanggal_training')
                    ->date()
                    ->sortable(),
                TextColumn::make('lokasi')
                    ->searchable(),
<<<<<<< HEAD
                TextColumn::make('pegawais.nama')
                    ->label('Peserta')
                    ->badge()
                    ->separator(',')
                    ->wrap(),
=======
>>>>>>> a24a7b72be52e7b391d93f2cd8d7e1b4ce5d12b7
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
