<?php
        $alunno1 = new Alunno("Davide", "Xie", 19);
        $alunno2 = new Alunno("Songnan", "Chen", 20);
        $alunno3 = new Alunno("Antonio", "Zheng", 19);
        $alunno4 = new Alunno("FF", "W", 18);
        $alunni = array($alunno1, $alunno2, $alunno3, $alunno4);

        foreach ($alunni as $key => $value) {
                echo "Name: " . $value->getName() ;
                echo "Surname: " . $value->getSurname();
                echo "Age: " . $value->getAge();
        }
?>
