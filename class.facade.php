<?php
include_once("class.orderservice.php");
include_once("class.paymentservice.php");
include_once("class.shippingservice.php");

class Facade
{
    private $orderService;
    private $paymentService;
    private $shippingService;

    public function __construct()
    {
        $this->orderService = new OrderService();
        $this->paymentService = new PaymentService();
        $this->shippingService = new ShippingService();
    }

    public function placeOrder($ordrData)
    {
        $orderId = $this->orderService->createOrder($orderData);
        $paymentStatus = $this->paymentService->processPayment($orderId);

        if($paymentStatus)
        {
            $shippingStatus = $this->shippingService->createShipment($orderId);

            if($shippingStatus)
            {
                return "Order placed successfully!";
            }
            else
            {
                return "Error creating shipment.";
            }
        }
        else
        {
            return "Error processing payment.";
        }
    }
}
?>
