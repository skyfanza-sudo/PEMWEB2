<?php
<<<<<<< HEAD
=======

>>>>>>> a24a7b72be52e7b391d93f2cd8d7e1b4ce5d12b7
namespace App\Filament\Resources\Trainings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
<<<<<<< HEAD
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use App\Models\Pegawai;
=======
>>>>>>> a24a7b72be52e7b391d93f2cd8d7e1b4ce5d12b7

class TrainingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
<<<<<<< HEAD
                Select::make('jenis_training_id')
                    ->label('Jenis Training')
                    ->relationship('jenisTraining', 'nama_jenis')
                    ->searchable()
                    ->preload()
                    ->required(),
=======
                TextInput::make('jenis_training_id')
                    ->required()
                    ->numeric(),
>>>>>>> a24a7b72be52e7b391d93f2cd8d7e1b4ce5d12b7
                TextInput::make('nama_training')
                    ->required(),
                TextInput::make('penyelenggara')
                    ->required(),
                DatePicker::make('tanggal_training')
                    ->required(),
                TextInput::make('lokasi')
                    ->required(),
<<<<<<< HEAD
                Repeater::make('peserta')
                    ->label('Peserta Training')
                    ->default([])
                    ->schema([
                        Select::make('pegawai_id')
                            ->label('Pegawai')
                            ->options(
                                Pegawai::query()
                                    ->pluck('nama', 'id')
                                    ->toArray()
                            )
                            ->searchable()
                            ->required(),
                        Select::make('status')
                            ->options([
                                'Terdaftar' => 'Terdaftar',
                                'Mengikuti' => 'Mengikuti',
                                'Selesai' => 'Selesai',
                            ])
                            ->required(),
                    ])
                    ->columns(2)
                    ->defaultItems(1)
                    ->addActionLabel('Tambah Peserta'),
            ]);
    }
}
=======
            ]);
    }
}
>>>>>>> a24a7b72be52e7b391d93f2cd8d7e1b4ce5d12b7
