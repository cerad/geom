<?php declare(strict_types=1);

namespace App\Command;

use App\Entity\Place;
use App\Geo\Point;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GeomCommand extends Command
{
    private $em;

    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:geom';

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;

        parent::__construct();
    }

    protected function configure()
    {
        // ...
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo "Geom Command\n";
        $em = $this->em;
        $place = $em->find(Place::class,1);
        dump($place);
        return;

        $place = new Place();
        $place->setName('Here');
        $place->setLocation(new Point(12.3,45.6));

        $em->persist($place);
        $em->flush();
    }
}