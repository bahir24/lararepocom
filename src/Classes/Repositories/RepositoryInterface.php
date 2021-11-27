<?php
namespace Bahir24\Lararepocom\Classes\Repositories;

interface RepositoryInterface
{
    /**
     * Return all models
     */
    public function all();
    /**
     * Create model
     */
    public function create();
    /**
     * Update model
     */
    public function update();
    /**
     * Delete model
     */
    public function delete();
}
