<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            /* ---------- */
            [
                'name' => 'Fender Artist Series Stevie Ray Vaughan Stratocaster',
                'price' => '500000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/510053000064000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 1,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Gibson Slash Les Paul Standard Gold Top',
                'price' => '900000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L72812000006000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 1,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Gibson ES-335 Figured Semi-Hollow',
                'price' => '1000000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L72812000006000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 1,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'Fender CD-60SCE Dreadnought',
                'price' => '75000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L44303000002000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 2,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Taylor 414ce V-Class Special-Edition',
                'price' => '650000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L26331000001000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 2,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Epiphone Songmaker DR-100 Vintage Sunburst',
                'price' => '38000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/518569000015000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 2,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'Snark Black Silver Snark Clip-On Tuner',
                'price' => '4500',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L86249000000000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 3,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Ernie Ball Regular Slinky 2221 Electric Guitar Strings',
                'price' => '1500',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/100622000000000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 3,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Road Runner Electric Guitar Gig Bag in a Box Black',
                'price' => '6800',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L53107000001000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 3,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'Fender Player Jazz Bass Plus Top Green Burst',
                'price' => '200000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L75293000002000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 4,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Squier Affinity Series Precision Bass Olympic White',
                'price' => '63000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L84392000002000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 4,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Fender American Professional II Precision Bass',
                'price' => '400000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L78032000002000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 4,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'Fender Player Jazz Bass Plus Top Limited-Edition',
                'price' => '75000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L27717000001000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 5,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Ibanez AEB5E Acoustic-Electric Bass Black',
                'price' => '61000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/620445000001000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 5,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Mitchell EZB Acoustic-Electric Bass Black',
                'price' => '56500',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L54665000003000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 5,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'Marshall DSL40CR 40W 1x12 Tube Guitar Amp',
                'price' => '240000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/K64638000000000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 6,  
                'hasStock' => true, 
            ],
            [
                'name' => 'BOSS Katana-50 MkII 50W 1x12 Guitar Combo Amp',
                'price' => '61000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L68667000000000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 6,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Fender Vintage Reissue 65 Deluxe Reverb Amp',
                'price' => '360000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/480507000001000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 6,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'Fender Rumble 40 1x10 40W Bass Combo Amp',
                'price' => '52000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/J06161000000000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 7,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Peavey MAX 100 100W 1x10 Bass Combo Amp',
                'price' => '68000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L19565000001000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 7,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Fender Rumble 100 1x12 100W Bass Combo Amp',
                'price' => '75000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/J06156000000000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 7,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'BOSS DS-1 Distortion Pedal',
                'price' => '15000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/151258000000000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 8,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Dunlop Original Cry Baby Wah Pedal',
                'price' => '22500',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/151000000000000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 8,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Line 6 Helix Multi-Effects Guitar Pedal',
                'price' => '380000',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/J23118000000000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 8,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'Rogue RGD0520 5-Piece Complete Drum Set',
                'price' => '92210',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/RGD0520-5-Piece-Complete-Drum-Set-Black/L85181000001000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 10,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Yamaha Stage Custom Birch 5-Piece Shell Pack With 22" Bass Drum',
                'price' => '171010',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/Stage-Custom-Birch-5-Piece-Shell-Pack-With-22-Bass-Drum-Honey-Amber/J07117000004000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 10,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Rogue Junior Kicker 5-Piece Drum Set',
                'price' => '68400',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/Junior-Kicker-5-Piece-Drum-Set-Metallic-Blue/L77816000004000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 10,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'Alesis Nitro Mesh Special-Edition 8-Piece Electronic Drum Set',
                'price' => '102380',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/Nitro-Mesh-Special-Edition-8-Piece-Electronic-Drum-Set/L71942000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 11,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Simmons SD1250 Electronic Drum Kit With Mesh Pads',
                'price' => '250600',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/SD1250-Electronic-Drum-Kit-With-Mesh-Pads/L83812000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 11,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Simmons SD600 Electronic Drum Set With Mesh Heads and Bluetooth',
                'price' => '91200',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/SD600-Electronic-Drum-Set-With-Mesh-Heads-and-Bluetooth/L28143000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 11,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'ROC-N-SOC Nitro Throne',
                'price' => '51300',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/Nitro-Throne-Gray/442612000002000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 12,  
                'hasStock' => true, 
            ],
            [
                'name' => 'DW 9000 Series Double Bass Drum Pedal',
                'price' => '205222',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/9000-Series-Double-Bass-Drum-Pedal/H89143000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 12,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Proline Snare Utility Rack',
                'price' => '22800',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/Snare-Utility-Rack-Black/J06810000001000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 12,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'Casio CDP-S360 Digital Piano With X-Stand and Bench',
                'price' => '155056',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/CDP-S360-Digital-Piano-With-X-Stand-and-Bench-Black-Essentials/L95307000001001-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 13,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Casio PX-S1100 Privia Digital Piano With CS-68 Stand and SP-34 Pedal',
                'price' => '222780',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/PX-S1100-Privia-Digital-Piano-With-CS-68-Stand-and-SP-34-Pedal-Red/L88783000003000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 13,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Roland FP-30X Digital Piano With Matching Stand and DP-10 Damper Pedal',
                'price' => '217750',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/FP-30X-Digital-Piano-With-Matching-Stand-and-DP-10-Damper-Pedal-Black/L85088000002000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 13,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'Hammond XK-5 ProStyle Lower Manual',
                'price' => '501650',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/XK-5-ProStyle-Lower-Manual/J44132000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 14,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Hammond XK-1c Portable Organ',
                'price' => '393340',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/XK-1c-Portable-Organ/H99720000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 14,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Used Roland Vk8 Organ',
                'price' => '159610',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/Vk8-Organ/000000118858345-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 14,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'Native Instruments KOMPLETE KONTROL S88 MK2 MIDI Controller',
                'price' => '204990',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/KOMPLETE-KONTROL-S88-MK2-MIDI-Controller/L35589000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 15,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Akai Professional MPC Studio Music Production Controller',
                'price' => '45370',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/MPC-Studio-Music-Production-Controller/L87785000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 15,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Akai Professional Force Music Production System',
                'price' => '296207',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/Force-Music-Production-System/L47631000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 15,  
                'hasStock' => true, 
            ],
            /* ---------- */
            [
                'name' => 'Sterling Audio MX3 3" Powered Studio Monitor',
                'price' => '27360',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/MX3-3-Powered-Studio-Monitor-Pair/L19694000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 16,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Mackie CR3-XBTLTD-WHT-DRVR 3" Multimedia Monitors All-White With Black',
                'price' => '45330',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/CR3-XBTLTD-WHT-DRVR-3-Multimedia-Monitors-With-Bluetooth-in-Limited-Edition-All-White-With-Black-Trim-White/L86953000001000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 16,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Mackie CR3-XBT 3" Active 50W Bluetooth Multimedia Studio Monitors, Pair',
                'price' => '38600',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/CR3-XBT-3-Active-50W-Bluetooth-Multimedia-Studio-Monitors-Pair/L73334000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 16,  
                'hasStock' => true, 
            ],
             /* ---------- */
            [
                'name' => 'Universal Audio Apollo Twin X QUAD Heritage Edition Thunderbolt 3',
                'price' => '341810',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/Apollo-Twin-X-QUAD-Heritage-Edition-Thunderbolt-3-Audio-Interface/L81213000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 17,  
                'hasStock' => true, 
            ],
            [
                'name' => 'M-Audio AIR 192|4 USB-C Audio Interface',
                'price' => '27135',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/AIR-1924-USB-C-Audio-Interface/L69987000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 17,  
                'hasStock' => true, 
            ],
            [
                'name' => 'RANE TWELVE MKII Motorized Battle-Ready DJ MIDI Controller',
                'price' => '204996',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/L77468000000000-00-720x720.jpg',
                'image_path' => '',
                'subcategory_id' => 17,  
                'hasStock' => true, 
            ],
             /* ---------- */
             [
                'name' => 'RODE NT1-A Large-Diaphragm Condenser Microphone With SM6 Shockmount',
                'price' => '56770',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/NT1-A-Large-Diaphragm-Condenser-Microphone-With-SM6-Shockmount-and-Pop-Filter-XLR-Cable-and-Dust-Cover/476502000000000-00-180x180.jpg',
                'image_path' => '',
                'subcategory_id' => 18,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Universal Audio Sphere DLX Modeling Microphone',
                'price' => '294150',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/Sphere-DLX-Modeling-Microphone/L98186000000000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 18,  
                'hasStock' => true, 
            ],
            [
                'name' => 'Neumann TLM 103 Condenser Microphone',
                'price' => '272492',
                'image_link' => 'https://media.guitarcenter.com/is/image/MMGS7/TLM-103-Condenser-Microphone-Nickel/J52341000002000-00-220x220.jpg',
                'image_path' => '',
                'subcategory_id' => 18,  
                'hasStock' => true, 
            ],
        ];

        DB::table('product')->insert($data);
    }
}