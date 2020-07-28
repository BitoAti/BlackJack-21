<?php

class Game{

    private $cardDeck;
    private $player;
    private $dealer;
    private $table;

    //kirakja az udvozlo kepet
    //egy inputra halad tovabb
    public function showWelcomePage(){
        //inputtal be kell kerni a jatekos nevet es elmenteni a playerba
        echo "Enter you name: ";
        $playerName = readline("Enter your name: ");
        $this->player->setName($playerName);

    }

    public function __construct()
    {
        $this->cardDeck =  new CardDeck();
        $this->player = new Player();
        $this->dealer = new Dealer();
        $this->table = new Table();
    }

    public function prepareGame(){
        CardFactory::createCardDeck($this);


        for ($i=0;$i<15;$i++){
            $this->dealer->addCard($this->cardDeck->getDeck()[$i]);
        }

        for ($i=0;$i<15;$i++){
            $this->player->addCard($this->cardDeck->getDeck()[$i]);
        }

        //echo count($this->dealer->getCards());

        $this->table->printTable($this->player->getName(), $this->player->getCash(), $this->dealer->getCards(),$this->player->getCards());




    }


    public function playGame()
    {
//        $this->cardDeck->getCards();

    }


    public function addCardToDeck($card){
        $this->cardDeck->addCardToDeck($card);
    }


}










