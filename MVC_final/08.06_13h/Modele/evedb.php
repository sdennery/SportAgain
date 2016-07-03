<?php

try {
                        $DB_eve = new PDO ("mysql:host=localhost;dbname=sport'again;charset=utf8",'root','');
                        }
                        catch (exeption $e) {
                            die ('erreur : '. $e ->getMessage());
                        }
?>
