<?php
/*
* DotDev - PHP Developer Test
* Author:
* Date Completed:
* Time taken: 0h 0m
* Remarks:
*   - Modules
*   - Errors
*/

class StoreData {
    function __construct() {
    }

    public function loadData () {
        $customers = (object) [
            ['id' => 'BQYLCQ0CCwIOBgYNBAcACw', 'name' => 'Bob'],
            ['id' => 'CQwPDAkDDAQLBQsOBAcMBw', 'name' => 'Jan'],
            ['id' => 'AgsIBAsFAwYCCw8GBAINAQ', 'name' => 'Steve'],
            ['id' => 'DAEFDQwPDwMCCwULBAAMDg', 'name' => 'Fred'],
            ['id' => 'DQkCAAYHAAMJBA4LBAUOCg', 'name' => 'Robot']
        ];
        $orders = (object) [
            ['id' => 'DwsNDQ4JDQEEBQIJBAwNBA', 'customerId' => 'BQYLCQ0CCwIOBgYNBAcACw', 'dateOrdered' => 1506476504],
            ['id' => 'DwsPBQ0BAA0BBwwMBAoECA', 'customerId' => 'BQYLCQ0CCwIOBgYNBAcACw', 'dateOrdered' => 1506480104],
            ['id' => 'DAEFCwUAAgQPAQIIBA4IBA', 'customerId' => 'CQwPDAkDDAQLBQsOBAcMBw', 'dateOrdered' => 1506562904],
            ['id' => 'BAUNCAUAAQYMDgULBAMDAQ', 'customerId' => 'CgUDCQ8IDAsIBwUBBAgIAA', 'dateOrdered' => 1507081304],
            ['id' => 'DAMGAg8GCggLBwkJBAoECg', 'customerId' => 'AgsIBAsFAwYCCw8GBAINAQ', 'dateOrdered' => 1509068504],
            ['id' => 'CQALBwoDAw0AAQgHBAEJBQ', 'customerId' => 'DAEFDQwPDwMCCwULBAAMDg', 'dateOrdered' => 1538012504]
        ];
        $order_items = (object) [
            ['id' => 'DwsNDQ4JDQEEBQIJBAwNBA', 'items' => [
                'id' => 'CgkCDwwDDgYODgYFBAwKAQ', 'value' => 10.00,  'name' => 'b0a8b6f820479900e34d34f6b8a4af73',
                'id' => 'DQcJBAYFCAoCBAYJBAIGDQ', 'value' => 0.55,   'name' => 'cf3298bb5cbfd41aa44ba18b4f305a36',
                'id' => 'BwEOBwgNDQ4NCQkHBA8IDA', 'value' => 101.00, 'name' => 'ecbdb882ae865a07d87611437fda0772'
                ]
            ],
            ['id' => 'DwsPBQ0BAA0BBwwMBAoECA', 'items' => [
                'id' => 'CgkCDwwDDgYODgYFBAwKAQ', 'value' => 90.00,  'name' => 'b0a8b6f820479900e34d34f6b8a4af73',
                'id' => 'DQcJBAYFCAoCBAYJBAIGDQ', 'value' => 0.55,   'name' => 'cf3298bb5cbfd41aa44ba18b4f305a36',
                'id' => 'BwEOBwgNDQ4NCQkHBA8IDA', 'value' => 101.00, 'name' => 'ecbdb882ae865a07d87611437fda0772'
                ]
            ],
            ['id' => 'DAEFCwUAAgQPAQIIBA4IBA', 'items' => [
                'id' => 'CgkCDwwDDgYODgYFBAwKAQ', 'value' => 3.00,  'name' => 'b0a8b6f820479900e34d34f6b8a4af73',
                'id' => 'DQcJBAYFCAoCBAYJBAIGDQ', 'value' => 0.55,  'name' => 'cf3298bb5cbfd41aa44ba18b4f305a36',
                'id' => 'BwEOBwgNDQ4NCQkHBA8IDA', 'value' => 15.00, 'name' => 'ecbdb882ae865a07d87611437fda0772'
                ]
            ],
            ['id' => 'BAUNCAUAAQYMDgULBAMDAQ', 'items' => [
                'id' => 'CgkCDwwDDgYODgYFBAwKAQ', 'value' => 10.00,  'name' => 'b0a8b6f820479900e34d34f6b8a4af73',
                'id' => 'DQcJBAYFCAoCBAYJBAIGDQ', 'value' => 0.55,   'name' => 'cf3298bb5cbfd41aa44ba18b4f305a36',
                'id' => 'BwEOBwgNDQ4NCQkHBA8IDA', 'value' => 101.00, 'name' => 'ecbdb882ae865a07d87611437fda0772'
                ]
            ],
            ['id' => 'DAMGAg8GCggLBwkJBAoECg', 'items' => [
                'id' => 'CgkCDwwDDgYODgYFBAwKAQ', 'value' => 32.00,  'name' => 'b0a8b6f820479900e34d34f6b8a4af73',
                'id' => 'DQcJBAYFCAoCBAYJBAIGDQ', 'value' => 0.55,   'name' => 'cf3298bb5cbfd41aa44ba18b4f305a36',
                'id' => 'BwEOBwgNDQ4NCQkHBA8IDA', 'value' => 101.00, 'name' => 'ecbdb882ae865a07d87611437fda0772'
                ]
            ]
        ];
    }

    public function formatData ($option) {
        // All data should be returned as formatted JSON.
        if ($option = 1) {
            // return orders sorted by highest value. Be sure to include the order total in the response
        } elseif ($option = 2) {
            // return orders sorted by date
        } elseif ($option = 3) {
            // return orders without items
        }
        print 'DotDev';
    }
}

$run = new StoreData();
$run->formatData($option);
