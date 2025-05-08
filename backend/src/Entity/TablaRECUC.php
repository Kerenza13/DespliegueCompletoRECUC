#[ORM\Entity]
#[ORM\Table(name: "secretosIN")]
class TablaRECUC {
 #[ORM\Id]
 #[ORM\GeneratedValue]
 #[ORM\Column(type: "integer")]
 private int $id;

 #[ORM\Column(type: "string", length: 255)]
 private string $fraseINI;
 // Getters y Setters
}
