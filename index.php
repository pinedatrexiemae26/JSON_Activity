<?php
header('Access-Control-Allow-Origin: *');
$plants = array(
    array(
        "name" => "Ginger",
        "scientificname" => "Zingiber officinale",
        "uses" => "nausea and vomiting",
        "timeboiled" => "Boil the ginger root and water for ten to twenty minutes",
        "Facts" => array(
                "Fact_1" => "Ginger is actually a rhizome, not a root", 
                "Fact_2" => "The ginger plant is an herb", 
                "Fact_3" => "Ginger is a part of the Zingiberaceae familys", 
                "Fact_4" => "May Help With Cancer", 
                "Fact_5" => "Healthier Skin"
        ), 
        "image" => "https://files.nccih.nih.gov/ginger-thinkstockphotos-531052216-square.jpg"
    ),

    array(
        "name" => "tawa-tawa",
        "scientificname" => "Euphorbia hirta",
        "uses" => "treatment of dengue",
        "timeboiled" => "15 minutes",
        "Facts" => array(
                "Fact_1" => "It contains contain triterpenes", 
                "Fact_2" => "phytosterols", 
                "Fact_3" => "tannins", 
                "Fact_4" => "polyphenols", 
                "Fact_5" => "flavonoids"
        ),
        "image" => "https://www.herbanext.com/wp-content/uploads/2022/02/tawa-tawa.jpg"
    ),

    array(
        "name" => "sambung",
        "scientificname" => "Blumea balsamifera",
        "uses" => "good for kidney",
        "timeboiled" => "Steep the leaves for 10 minutes",
        "Facts" => array(
                "Fact_1" => "Traditional Chinese Medicines", 
                "Fact_2" => "This plant grows on forest edges, under forests, river beds, valleys and grasses", 
                "Fact_3" => "treat wounds", 
                "Fact_4" => "treat rheumatism", 
                "Fact_5" => "treat anti-diarrhea"
        ),
        "image" => "https://cdn.shopify.com/s/files/1/0039/7780/5924/products/sambung_clipped_rev_1_602x.jpg?v=1644802935"
    ),

    array(
        "name" => "ulasimang bato",
        "scientificname" => "Peperomia pellucida",
        "uses" => "the leaves have been used as a decoction to treat gout",
        "timeboiled" => "10 to 15 minutes",
        "Facts" => array(
                "Fact_1" => "Also known as pansit-pansitan", 
                "Fact_2" => "Contains flavonoids and alkaloids", 
                "Fact_3" => "Have anti-inflammatory and analgesic effects", 
                "Fact_4" => "Treat skin infections and wounds", 
                "Fact_5" => "Good source of vitamins and minerals"
        ),
        "image" => "https://tapitechtransfer.dost.gov.ph/sites/default/files/styles/colorboximg/public/2019-07/ulasimang%20bato.jpg?itok=gcL_HOQ4"
    ),

    array(
        "name" => "lagundi",
        "scientificname" => "Vitex negundo",
        "uses" => "effectively treat wounds, headaches, ulcers, skin diseases, diarrhea, and the common cold",
        "timeboiled" => "2 cups of water. Boil for 10 minutes",
        "Facts" => array(
                "Fact_1" => "Used to treat insect and snake bites", 
                "Fact_2" => "A herbal medicine for respiratory problems", 
                "Fact_3" => "Treat wounds", 
                "Fact_4" => "Treat headaches", 
                "Fact_5" => "Treat skin diseases"
        ),
        "image" => "https://www.pchrd.dost.gov.ph/wp-content/uploads/2022/04/Lagundi-1.jpg"
    ),
    array(
        "name" => "garlic",
        "scientificname" => "Allium sativum",
        "uses" => "to treat Anti-cholesterol",
        "timeboiled" => "about 7 minutes",
        "Facts" => array(
                "Fact_1" => "Low in calories", 
                "Fact_2" => "Known to clear acne, simply rub a thin slice on a pimple before bed time", 
                "Fact_3" => " Helps boost your immune system", 
                "Fact_4" => " Can Improve Athletic Performance", 
                "Fact_5" => "Garlic Helps Detox Your Body"
        ),
        "image" => "https://www.realsimple.com/thmb/zjJYhj0AXTu8Ndio6-Hl2NzSicY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/health-benefits-of-garlic-2000-482c21fd2d154102a9b7a46ccb34e70a.jpg"
    )
);

echo json_encode(array("plants" => $plants));
?>