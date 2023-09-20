<?php 
			
            add_button_menu("Purchase Request","purchase_request",
            "ico_rekening.png","Permintaan order pembelian (PO) untuk dipesankan oleh bagian buyer");
            add_button_menu("Purchase Order","purchase_order",
            "ico_rekening.png","Order pesananan pembelian (PO) untuk dikirim ke supplier");
            add_button_menu("Faktur Pembelian","purchase_invoice",
            "ico_rekening.png","Invoice pencatatan hutang supplier");
            add_button_menu("Bayar Hutang","payables_payments",
            "ico_rekening.png","Proses pembayaran hutang supplier atas nomor faktur pembelian");
            add_button_menu("Retur Pembelian","purchase_retur",
            "ico_rekening.png","Pengembalian barang ke supplier (Retur)");
            add_button_menu("Debit Memo","purchase_dbmemo",
            "ico_rekening.png","Debit memo");
            add_button_menu("Credit Memo","purchase_crmemo",
            "ico_rekening.png","Credit memo");
            add_button_menu("Kontra bon","po/kontra_bon",
            "ico_rekening.png","Rencana pembayaran hutang faktur supplier");
            add_button_menu("Umur Barang","po/umur_barang",
            "ico_rekening.png","Proses perhitungan umur barang");
            add_button_menu("Tracking Harga","po/tracking_harga",
            "ico_rekening.png","Hisotry harga order pembelian barang");
            add_button_menu("Profit Sharing","po/profit_sharing",
            "ico_rekening.png","Perhitungan profit sharing");
            add_button_menu("Faktur Konsinyasi","po/konsinyasi/create",
            "ico_rekening.png","Pembuatan faktur pembelian konsinyasi");
            
?>