<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Librarian extends Model
{
    /**
     * @var User
     */
    private $user;

    /**
     * @var Library
     */
    private $library;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return $this
     */
    public function setUser(User $user): self
    {
        $this->user = $user;
    }

    /**
     * @return Library
     */
    public function getLibrary(): Library
    {
        return $this->library;
    }

    /**
     * @param Library $library
     * @return $this
     */
    public function setLibrary(Library $library): self
    {
        $this->library = $library;
    }
}
