<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: "secretosRECUC")]
class TablaRECUC 
{
 #[ORM\Id]
 #[ORM\GeneratedValue]
 #[ORM\Column(type: "integer")]
 private int $id;
 #[ORM\Column(type: "string", length: 255)]
 private string $fraseRECUC;
 public function getId(): int
 {
 return $this->id;
 }
 public function getfraseRECUC(): string
 {
 return $this->fraseRECUC;
 }
 public function setfraseRECUC(string $fraseRECUC): self
 {
 $this->fraseRECUC = $fraseRECUC;
 return $this;
 }
}