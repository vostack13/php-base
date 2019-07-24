<?php

function task1(string $fileName)
{
    $fileData = file_get_contents($fileName);
    $purchaseOrderData = new SimpleXMLElement($fileData);

    $orderNumber = $purchaseOrderData->attributes()->PurchaseOrderNumber;
    $orderDate = $purchaseOrderData->attributes()->OrderDate;
    $deliveryNotes = $purchaseOrderData->DeliveryNotes->__toString();

    echo "<h2> Purchase order №$orderNumber</h2>";
    echo "<p>Order date: $orderDate</p>";
    echo "<p><b>DeliveryNotes:</b> <i>$deliveryNotes</i></p>";

    echo '<table border="1" bordercolor="#dddddd" cellspacing="0" cellpadding="12" width="600">' .
        '<tr height="32">' .
        '<th align="left">Product name</th>' .
        '<th align="left">Quantity</th>' .
        '<th align="left">US price</th>' .
        '<th align="left">Comment</th>' .
    '</tr>';

    foreach ($purchaseOrderData->Items->Item as $item) {
        echo '<tr>' .
            '<td>' . $item->ProductName->__toString() . '</td>' .
            '<td>' . $item->Quantity->__toString() . '</td>' .
            '<td>' . $item->USPrice->__toString() . '</td>' .
            '<td>' . $item->Comment->__toString() . '</td>' .
        '</tr>';
    }

    echo '</table>';
    echo '<div style="display: flex; margin-top: 24px">';

    foreach ($purchaseOrderData->Address as $address) {
        echo '<table cellpadding="8">'.
            '<tr>' .
                '<td colspan="2">' . '<b>' . $address->attributes()->Type . '</b>' . '</td>' .
            '</tr>' .
            '<tr>' .
                '<td width="60">' . 'Name:' . '</td>' .
                '<td width="240">' . $address->Name->__toString() . '</td>' .
            '</tr>' .
            '<tr>' .
                '<td width="60">' . 'Street:' . '</td>' .
                '<td width="240">' . $address->Street->__toString() . '</td>' .
            '</tr>' .
            '<tr>' .
                '<td width="60">' . 'City:' . '</td>' .
                '<td width="240">' . $address->City->__toString() . '</td>' .
            '</tr>' .
            '<tr>' .
                '<td width="60">' . 'State:' . '</td>' .
                '<td width="240">' . $address->State->__toString() . '</td>' .
            '</tr>' .
            '<tr>' .
                '<td width="60">' . 'Zip:' . '</td>' .
                '<td width="240">' . $address->Zip->__toString() . '</td>' .
            '</tr>' .
            '<tr>' .
                '<td width="60">' . 'Country:' . '</td>' .
                '<td width="240">' . $address->Country->__toString() . '</td>' .
            '</tr>' .

        '</table>';
    }

    echo '</div>';
}
