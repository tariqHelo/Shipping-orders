<?php
use App\Models\Order;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('coupon');
            $table->string('order_number');
            $table->string('tracking_number');
            $table->string('received_date');
            $table->enum('sender' , ['individual', 'company']);
            $table->string('recipient_name');
            $table->string('phone1');
            $table->string('phone2');
            $table->foreignId('dealer_id')->constrained();
            $table->foreignId('delegate_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('area_id')->constrained();
            $table->foreignId('service_id')->constrained();
            $table->string('address');
            $table->string('house_number');
            $table->string('number_of_bags');
            $table->string('shipment_material');
            $table->string('kg');
            $table->enum('type' , ['local', 'international']);
            $table->string('Shipping_fee');
            $table->string('order_amount');
            $table->enum('shipping_amount' , ['sender', 'receiver']);
            $table->string('notes');
            $table->string('details');
            $table->enum('Order_status' ,[ 
             Order::STATUS_ACTIVE,
             Order::STATUS_DRAFT, 
             Order::STATUS_NEW, 
             Order::STATUS_RECEVING_TABLE, 
             Order::STATUS_DELIVERY_SCHEDUALE ,
             Order::STATUS_OnTheWayToTheDealer,
             Order::STATUS_OnTheWayToTheRecipient,
             Order::STATUS_CanceledByTheRecipient,
             Order::STATUS_CanceledFromDealer,
             Order::STATUS_CanceledBySayer,
             Order::STATUS_FEEDBACK,
             Order::STATUS_ReceiptDenied,
             Order::STATUS_DAMAGED,
             Order::STATUS_BrokeDown,
             Order::STATUS_Missing,
             Order::STATUS_WaitingForTheDealer,
             Order::STATUS_POSTPONED ,
             Order::STATUS_ReceivedAndUnpaid ,
             Order::STATUS_ReceivedAndPaidInCash,
             Order::STATUS_ReceivedAndPaidByBankTransfer,
             Order::STATUS_ReceivedAndPartiallyPaid,
             Order::STATUS_NotReceivedAndPaid,
             Order::STATUS_Delayed]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
