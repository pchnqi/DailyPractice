<?php

// Visitor Pattern
require_once __DIR__ . '/../vendor/autoload.php';

use Source\Pattern\Visitor\Visitee;
use Source\Pattern\Visitor\Visitor;
use Source\Pattern\Visitor\BookVisitee;
use Source\Pattern\Visitor\SoftwareVisitee;
use Source\Pattern\Visitor\PlainDescriptionVisitor;
use Source\Pattern\Visitor\FancyDescriptionVisitor;


writeln( 'BEGIN TESTING VISITOR PATTERN' );
writeln( '' );

$book     = new BookVisitee( 'Design Patterns', 'Gamma, Helm, Johnson, and Vlissides' );
$software = new SoftwareVisitee( 'Zend Studio', 'Zend Technologies', 'www.zend.com' );

$plainVisitor = new PlainDescriptionVisitor();

acceptVisitor( $book, $plainVisitor );
writeln( 'plain description of book: ' . $plainVisitor->getDescription() );
acceptVisitor( $software, $plainVisitor );
writeln( 'plain description of software: ' . $plainVisitor->getDescription() );
writeln( '' );

$fancyVisitor = new FancyDescriptionVisitor();

acceptVisitor( $book, $fancyVisitor );
writeln( 'fancy description of book: ' . $fancyVisitor->getDescription() );
acceptVisitor( $software, $fancyVisitor );
writeln( 'fancy description of software: ' . $fancyVisitor->getDescription() );

writeln( 'END TESTING VISITOR PATTERN' );

//double dispatch any visitor and visitee objects
function acceptVisitor ( Visitee $visitee_in, Visitor $visitor_in )
{
	$visitee_in->accept( $visitor_in );
}

