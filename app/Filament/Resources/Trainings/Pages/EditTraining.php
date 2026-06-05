<?php
<<<<<<< HEAD
namespace App\Filament\Resources\Trainings\Pages;
=======

namespace App\Filament\Resources\Trainings\Pages;

>>>>>>> a24a7b72be52e7b391d93f2cd8d7e1b4ce5d12b7
use App\Filament\Resources\Trainings\TrainingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTraining extends EditRecord
{
    protected static string $resource = TrainingResource::class;
<<<<<<< HEAD
=======

>>>>>>> a24a7b72be52e7b391d93f2cd8d7e1b4ce5d12b7
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
<<<<<<< HEAD
    //-------setelah edit selesai diarahkan ke halaman index--------
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    //-------proses edit many to many--------
    protected array $peserta = [];
    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['peserta'] = $this->record
            ->pegawais
            ->map(fn ($pegawai) => [
                'pegawai_id' => $pegawai->id,
                'status' => $pegawai->pivot->status,
            ])
            ->values()
            ->toArray();

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $this->peserta = $data['peserta'] ?? [];

        unset($data['peserta']);

        return $data;
    }

    protected function afterSave(): void
    {
        $syncData = [];
        foreach ($this->peserta as $peserta) {
            $syncData[
                $peserta['pegawai_id']
            ] = [

                'status' => $peserta['status']
            ];
        }
        $this->record
            ->pegawais()
            ->sync($syncData);
    }
=======
>>>>>>> a24a7b72be52e7b391d93f2cd8d7e1b4ce5d12b7
}
