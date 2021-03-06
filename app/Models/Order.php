<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 'active';
    const STATUS_DRAFT = 'draft';
    const STATUS_NEW = 'new';
    const STATUS_RECEVING_TABLE = 'ReceivingTable';
    const STATUS_DELIVERY_SCHEDUALE = 'deliverySchedule';
    const STATUS_OnTheWayToTheDealer = 'OnTheWayToTheDealer';
    const STATUS_OnTheWayToTheRecipient = 'OnTheWayToTheRecipient';
    const STATUS_CanceledByTheRecipient = 'CanceledByTheRecipient';
    const STATUS_CanceledFromDealer = 'CanceledFromDealer';
    const STATUS_CanceledBySayer = 'CanceledBySayer';
    const STATUS_FEEDBACK = 'feedback';
    const STATUS_ReceiptDenied = 'ReceiptDenied';
    const STATUS_DAMAGED = 'damaged';
    const STATUS_BrokeDown = 'BrokeDown';
    const STATUS_Missing = 'missing';
    const STATUS_WaitingForTheDealer = 'WaitingForTheDealer';

    const STATUS_POSTPONED = 'postponed';
    const STATUS_ReceivedAndUnpaid = 'ReceivedAndUnpaid';
    const STATUS_ReceivedAndPaidInCash = 'ReceivedAndPaidInCash';
    const STATUS_ReceivedAndPaidByBankTransfer = 'ReceivedAndPaidByBankTransfer';
    const STATUS_ReceivedAndPartiallyPaid = 'ReceivedAndPartiallyPaid';
    const STATUS_NotReceivedAndPaid = 'NotReceivedAndPaid';
    const STATUS_Delayed = 'Delayed';

      protected $fillable = [
            'coupon',
            'order_number',
            'tracking_number',
            'received_date',
            'sender_id',
            'recipient_name',
            'phone1',
            'phone2',
            'dealer_id',
            'delegate_id',
            'country_id',
            'city_id',
            'area_id',
            'service_id',
            'address',
            'house_number',
            'number_of_bags',
            'shipment_material',
            'kg',
            'type',
            'Shipping_fee',
            'order_amount',
            'shipping_amount',
            'notes',
            'details',
      ];
    

}
