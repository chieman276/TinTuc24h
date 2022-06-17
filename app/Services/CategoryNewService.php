<?php

namespace App\Services;

use App\Services\Interfaces\CategoryNewServiceInterface;

class CategoryNewService implements CategoryNewServiceInterface
{
    protected $categorieRepository;

    public function __construct(CategoryNewInterface $categorieRepository)
    {
        $this->categorieRepository = $categorieRepository;
    }

    public function getAll($request)
    {
        return $this->categorieRepository->getAll($request);
    }

    public function findById($id)
    {
        $categorie = $this->categorieRepository->findById($id);
        return $categorie;
    }

    public function create($request)
    {
        $categorie = $this->categorieRepository->create($request);
        return $categorie;
    }

    public function update($request, $id)
    {
        $oldCustomer = $this->categorieRepository->findById($id);
        $this->categorieRepository->update($request, $oldCustomer);
        return $oldCustomer;
    }

    public function destroy($id)
    {
        $categorie = $this->categorieRepository->findById($id);
        $this->categorieRepository->destroy($categorie);
        return $categorie;
    }
}
