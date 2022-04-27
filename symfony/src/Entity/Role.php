<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups('role:output')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups('role:output')]
    private $code;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups('role:output')]
    private $name;

    #[ORM\OneToMany(mappedBy: 'role', targetEntity: User::class)]
    private $role;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->role = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getRole(): Collection
    {
        return $this->role;
    }

    public function addRole(User $role): self
    {
        if (!$this->role->contains($role)) {
            $this->role[] = $role;
            $role->setRole($this);
        }

        return $this;
    }

    public function removeRole(User $role): self
    {
        if ($this->role->removeElement($role)) {
            // set the owning side to null (unless already changed)
            if ($role->getRole() === $this) {
                $role->setRole(null);
            }
        }

        return $this;
    }
}
