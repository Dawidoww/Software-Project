<?php
require "User.php";
require "Customer.php";
require "PersonalTrainer.php";
require "Payment.php";
require "Card.php";
require "Basket.php";
require "Order.php";
require "Promo.php";
require "Transaction.php";
require "Plans.php";

//USER CUSTOMER IS CREATED
$user = new Customer("Di0r","dawidoww15@gmail.com", "Dawid", "Hodurek");
$user->custAuthentication();
$user->register();
$user->login();
$user->fullName();
$user->editBasket();
$user->addToCart();
$user->makePayment();
$user->logOut();
printf("\n");
//USER PERSONAL TRAINER IS CREATED
$admin = new PersonalTrainer("PT123", "pt123@gmail.com", "Disi");
$admin->adminAuthentication();
$admin->login();
$admin->name();
$admin->addPlan();
$admin->deletePlan();
$admin->changePlan();
$admin->logOut();
printf("\n");
//PLANS ARE CREATED
$plan1 = new Plans("Power Up","Power Lifting", "This plan offers you a great power insurgence withing just weeks of starting it", 49.99 );
$plan1->planDetail();
$plan1->planDesc();
$plan1->planCost();
$plan2 = new Plans("Transform", "BodyBuilding", "This plan is for the people who want to transform their body into one that they have dreamed of", 49.99);
$plan2->planDetail();
$plan2->planDesc();
$plan2->planCost();
/*
$plan3 = new Plans("The Weight Blaster", "Slimming", "If you wanna loose all of you excess fat and look more healthier and comfortable in your own body then this plan is for YOU", 39.99);
$plan3->planDetail();
$plan3->planDesc();
$plan3->planCost();
$plan4 = new Plans("Titan Mode", "Bulking", "Wanna gain some extra mass? Wanna improve your strength?If so then this plan is perfect to get your goal started", 44.99);
$plan4->planDetail();
$plan4->planDesc();
$plan4->planCost();
*/
printf("\n");
//PROMOTION CODE HAS BEEN CREATED
$promo = new Promo("Easter", 20);
$promo->Promotion();
printf("\n");
//BASKET IS CREATED WITH PLAN AND QUANTITY
$basket = new Basket(1,"Titan Mode");
$basket->AddItem();
$basket->RemoveItem();
$basket->calcTotal();
$basket->CheckOut();
printf("\n");
//ORDER HAS BEEN CREATED
$order = new Order("22/03/2022","dawidoww15@gmail.com", 9872);
$order->calcTotal();
$order->promoApplied();
$order->placeOrder();
printf("\n");
//PAYMENT HAS BEEN CREATED
$payment = new Card(776, "MasterCard",4876594598654782, 49.99);
$payment->toBePayed();
$payment->Authorize();
$payment1 = new Card(356, "Visa",4916745624900843, 44.99);
$payment1->toBePayed();
$payment1->Authorize();
printf("\n");
//TRANSACTION HAS BEEN CREATED
$transaction = new Transaction(9342,  49.99 );
$transaction->storeTransaction();





