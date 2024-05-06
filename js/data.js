//  Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825) 

var teasList = [
  {
    id: 1,
    name: "Longjing (Dragon Well)",
    price: 20,
    quantity: 10,
    category: "Chinese Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from the West Lake region of Hangzhou, Zhejiang Province, China.",
      },
      {
        header: "Processing",
        description:
          "Pan-fried shortly after picking, giving it a distinct flat appearance.",
      },
      {
        header: "Flavor",
        description:
          "Has a strong, fresh aroma with a mild, sweet taste and a slightly nutty finish.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, helps improve digestion, and may aid in weight loss.",
      },
    ],
  },
  {
    id: 2,
    name: "Tieguanyin (Iron Goddess)",
    price: 25,
    quantity: 15,
    category: "Chinese Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Originating from Fujian Province, China.",
      },
      {
        header: "Processing",
        description:
          "Partially oxidized, giving it a unique floral aroma and flavor.",
      },
      {
        header: "Flavor",
        description:
          "Delicate and floral with a hint of sweetness and a lingering aftertaste.",
      },
      {
        header: "Health Benefits",
        description:
          "Known for promoting relaxation and reducing stress, rich in antioxidants.",
      },
    ],
  },
  {
    id: 3,
    name: "Keemun",
    price: 18,
    quantity: 12,
    category: "Chinese Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from Qimen County, Huangshan City, Anhui Province, China.",
      },
      {
        header: "Processing",
        description:
          "Fully oxidized, resulting in a bold and robust flavor profile.",
      },
      {
        header: "Flavor",
        description:
          "Has a winey, fruity aroma with hints of chocolate and floral notes.",
      },
      {
        header: "Health Benefits",
        description:
          "May help lower cholesterol levels and improve heart health.",
      },
    ],
  },
  {
    id: 4,
    name: "Da Hong Pao (Big Red Robe)",
    price: 30,
    quantity: 8,
    category: "Chinese Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from the Wuyi Mountains in Fujian Province, China.",
      },
      {
        header: "Processing",
        description:
          "Semi-oxidized, with large twisted leaves and a complex flavor profile.",
      },
      {
        header: "Flavor",
        description:
          "Rich and full-bodied with notes of roasted nuts, caramel, and cocoa.",
      },
      {
        header: "Health Benefits",
        description:
          "High in antioxidants, aids digestion, and supports weight management.",
      },
    ],
  },
  {
    id: 5,
    name: "Pu-erh",
    price: 35,
    quantity: 20,
    category: "Chinese Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Originating from Yunnan Province, China.",
      },
      {
        header: "Processing",
        description:
          "Post-fermented and aged, resulting in a unique earthy flavor.",
      },
      {
        header: "Flavor",
        description:
          "Smooth and mellow with distinct earthy, woody, and sometimes smoky notes.",
      },
      {
        header: "Health Benefits",
        description:
          "May aid digestion, promote weight loss, and reduce cholesterol levels.",
      },
    ],
  },
  {
    id: 6,
    name: "Lapsang Souchong",
    price: 22,
    quantity: 18,
    category: "Chinese Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from the Wuyi Mountains in Fujian Province, China.",
      },
      {
        header: "Processing",
        description:
          "Smoke-dried over pinewood fires, imparting a distinctive smoky flavor.",
      },
      {
        header: "Flavor",
        description:
          "Strong smoky aroma with a robust, full-bodied taste and hints of pine.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, may help improve cardiovascular health.",
      },
    ],
  },
  {
    id: 7,
    name: "Jasmine Tea",
    price: 15,
    quantity: 25,
    category: "Chinese Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Originating from Fujian Province, China.",
      },
      {
        header: "Processing",
        description:
          "Green tea leaves scented with jasmine flowers multiple times.",
      },
      {
        header: "Flavor",
        description:
          "Delicate floral aroma with a smooth, sweet taste and a refreshing finish.",
      },
      {
        header: "Health Benefits",
        description:
          "May help reduce stress, improve mood, and boost the immune system.",
      },
    ],
  },
  {
    id: 8,
    name: "Sencha",
    price: 20,
    quantity: 10,
    category: "Japanese Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from Japan, particularly the Shizuoka region.",
      },
      {
        header: "Processing",
        description:
          "Steamed shortly after picking to prevent oxidation, resulting in a vibrant green color.",
      },
      {
        header: "Flavor",
        description:
          "Grassy and vegetal with a hint of sweetness and a refreshing aftertaste.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, may boost metabolism and support cardiovascular health.",
      },
    ],
  },
  {
    id: 9,
    name: "Matcha",
    price: 25,
    quantity: 15,
    category: "Japanese Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Originating from Japan, specifically shaded tea bushes.",
      },
      {
        header: "Processing",
        description:
          "Ground into fine powder after shade-grown, retaining its nutrients.",
      },
      {
        header: "Flavor",
        description:
          "Rich, umami flavor with vegetal notes and a smooth, creamy texture.",
      },
      {
        header: "Health Benefits",
        description:
          "High in antioxidants, boosts energy, enhances focus, and promotes relaxation.",
      },
    ],
  },
  {
    id: 10,
    name: "Genmaicha",
    price: 18,
    quantity: 12,
    category: "Japanese Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from Japan, combines green tea with roasted brown rice.",
      },
      {
        header: "Processing",
        description: "Green tea leaves blended with roasted rice kernels.",
      },
      {
        header: "Flavor",
        description:
          "Toasty and nutty with a mild green tea flavor and a hint of sweetness.",
      },
      {
        header: "Health Benefits",
        description:
          "Low in caffeine, aids digestion, and provides antioxidants.",
      },
    ],
  },
  {
    id: 11,
    name: "Hojicha",
    price: 30,
    quantity: 8,
    category: "Japanese Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from Japan, made from roasted green tea leaves.",
      },
      {
        header: "Processing",
        description:
          "Green tea leaves roasted at high temperatures, resulting in a brown color.",
      },
      {
        header: "Flavor",
        description:
          "Toasty and nutty with a caramelized sweetness and a mild smoky aroma.",
      },
      {
        header: "Health Benefits",
        description:
          "Low in caffeine, aids digestion, and has a soothing effect on the stomach.",
      },
    ],
  },
  {
    id: 12,
    name: "Gyokuro",
    price: 35,
    quantity: 20,
    category: "Japanese Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Originating from Japan, specifically shaded tea bushes.",
      },
      {
        header: "Processing",
        description:
          "Shade-grown and harvested just once a year, resulting in tender leaves.",
      },
      {
        header: "Flavor",
        description:
          "Rich, sweet, and savory with a smooth, creamy texture and a lingering umami taste.",
      },
      {
        header: "Health Benefits",
        description:
          "High in theanine, provides relaxation and mental clarity, boosts metabolism.",
      },
    ],
  },
  {
    id: 13,
    name: "Kukicha",
    price: 22,
    quantity: 18,
    category: "Japanese Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from Japan, made from stems, stalks, and twigs of the tea plant.",
      },
      {
        header: "Processing",
        description:
          "Twigs and stems are roasted or steamed, then dried and aged.",
      },
      {
        header: "Flavor",
        description:
          "Mild and nutty with a slightly creamy texture and a refreshing green aroma.",
      },
      {
        header: "Health Benefits",
        description:
          "Low in caffeine, high in antioxidants, aids digestion, and supports bone health.",
      },
    ],
  },
  {
    id: 14,
    name: "Assam",
    price: 15,
    quantity: 25,
    category: "Indian Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Originating from the Assam region in Northeast India.",
      },
      {
        header: "Processing",
        description:
          "Fully oxidized, resulting in a bold, malty flavor and a rich, red liquor.",
      },
      {
        header: "Flavor",
        description:
          "Strong and robust with notes of malt, honey, and sometimes caramel.",
      },
      {
        header: "Health Benefits",
        description:
          "High in caffeine, boosts energy, aids digestion, and supports heart health.",
      },
    ],
  },
  {
    id: 15,
    name: "Darjeeling",
    price: 20,
    quantity: 10,
    category: "Indian Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from the Darjeeling district in West Bengal, India.",
      },
      {
        header: "Processing",
        description:
          "Partially oxidized, often referred to as the 'Champagne of teas.'",
      },
      {
        header: "Flavor",
        description:
          "Delicate and floral with muscatel grape notes and a crisp, clean finish.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, may improve digestion, and promote relaxation.",
      },
    ],
  },
  {
    id: 16,
    name: "Nilgiri",
    price: 25,
    quantity: 15,
    category: "Indian Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from the Nilgiri Hills in Tamil Nadu, South India.",
      },
      {
        header: "Processing",
        description:
          "Fully oxidized, resulting in a brisk and fragrant tea with a bright liquor.",
      },
      {
        header: "Flavor",
        description: "Smooth and mellow with fruity, floral, and woody notes.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, aids in weight management, and supports heart health.",
      },
    ],
  },
  {
    id: 17,
    name: "Masala Chai",
    price: 18,
    quantity: 12,
    category: "Indian Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from India, particularly in the region of Assam and Kerala.",
      },
      {
        header: "Processing",
        description:
          "Black tea blended with spices like cardamom, cinnamon, ginger, and cloves.",
      },
      {
        header: "Flavor",
        description:
          "Warm and spicy with a balance of sweetness, heat, and aromatic spices.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants and spices known for their anti-inflammatory properties.",
      },
    ],
  },
  {
    id: 18,
    name: "Earl Grey (blended with bergamot)",
    price: 30,
    quantity: 8,
    category: "Indian Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from the tea gardens of India, specifically Assam and Darjeeling.",
      },
      {
        header: "Processing",
        description:
          "Black tea flavored with oil extracted from the rind of bergamot oranges.",
      },
      {
        header: "Flavor",
        description:
          "Citrusy and floral with a hint of sweetness and a refreshing bergamot aroma.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, aids digestion, and may improve mood and focus.",
      },
    ],
  },
  {
    id: 19,
    name: "Nepal Black Tea",
    price: 35,
    quantity: 20,
    category: "Nepalese Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from various tea gardens in Nepal, particularly in the eastern region.",
      },
      {
        header: "Processing",
        description:
          "Fully oxidized, similar to Darjeeling black tea, but with unique Nepalese terroir.",
      },
      {
        header: "Flavor",
        description:
          "Smooth and malty with muscatel grape notes and a hint of floral sweetness.",
      },
      {
        header: "Health Benefits",
        description:
          "High in antioxidants, aids digestion, and may promote heart health.",
      },
    ],
  },
  {
    id: 20,
    name: "Nepal Green Tea",
    price: 22,
    quantity: 18,
    category: "Nepalese Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from various tea gardens in Nepal, grown at higher elevations.",
      },
      {
        header: "Processing",
        description:
          "Pan-fired or steamed to prevent oxidation, preserving its green color and freshness.",
      },
      {
        header: "Flavor",
        description:
          "Grassy and vegetal with a subtle sweetness and a clean, refreshing finish.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, boosts metabolism, and supports immune function.",
      },
    ],
  },
  {
    id: 21,
    name: "Nepal White Tea",
    price: 15,
    quantity: 25,
    category: "Nepalese Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from various tea gardens in Nepal, handpicked and minimally processed.",
      },
      {
        header: "Processing",
        description:
          "Withered and dried under controlled conditions to preserve its delicate flavor.",
      },
      {
        header: "Flavor",
        description:
          "Delicate and floral with subtle hints of melon, honey, and fresh grass.",
      },
      {
        header: "Health Benefits",
        description:
          "Low in caffeine, rich in antioxidants, and may promote skin health.",
      },
    ],
  },
  {
    id: 22,
    name: "Sencha",
    price: 20,
    quantity: 10,
    category: "Green Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from Japan, particularly the Shizuoka region.",
      },
      {
        header: "Processing",
        description:
          "Steamed shortly after picking to prevent oxidation, resulting in a vibrant green color.",
      },
      {
        header: "Flavor",
        description:
          "Grassy and vegetal with a hint of sweetness and a refreshing aftertaste.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, may boost metabolism and support cardiovascular health.",
      },
    ],
  },
  {
    id: 23,
    name: "Matcha",
    price: 25,
    quantity: 15,
    category: "Green Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Originating from Japan, specifically shaded tea bushes.",
      },
      {
        header: "Processing",
        description:
          "Ground into fine powder after shade-grown, retaining its nutrients.",
      },
      {
        header: "Flavor",
        description:
          "Rich, umami flavor with vegetal notes and a smooth, creamy texture.",
      },
      {
        header: "Health Benefits",
        description:
          "High in antioxidants, boosts energy, enhances focus, and promotes relaxation.",
      },
    ],
  },
  {
    id: 24,
    name: "Gunpowder",
    price: 18,
    quantity: 12,
    category: "Green Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Originating from Zhejiang Province, China.",
      },
      {
        header: "Processing",
        description:
          "Rolled into small pellets resembling gunpowder, preserving freshness.",
      },
      {
        header: "Flavor",
        description:
          "Strong and smoky with a slightly bitter taste and a lingering sweetness.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in catechins, supports weight loss, and boosts metabolism.",
      },
    ],
  },
  {
    id: 25,
    name: "Dragon Well",
    price: 30,
    quantity: 8,
    category: "Green Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from the West Lake region of Hangzhou, Zhejiang Province, China.",
      },
      {
        header: "Processing",
        description:
          "Pan-fried shortly after picking, giving it a distinct flat appearance.",
      },
      {
        header: "Flavor",
        description:
          "Has a strong, fresh aroma with a mild, sweet taste and a slightly nutty finish.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, helps improve digestion, and may aid in weight loss.",
      },
    ],
  },
  {
    id: 26,
    name: "Jasmine Pearl",
    price: 35,
    quantity: 20,
    category: "Green Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Originating from Fujian Province, China.",
      },
      {
        header: "Processing",
        description:
          "Green tea leaves rolled into pearls and scented with jasmine flowers.",
      },
      {
        header: "Flavor",
        description:
          "Delicate floral aroma with a sweet and smooth taste, jasmine-infused.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, may promote relaxation and boost immune function.",
      },
    ],
  },
  {
    id: 27,
    name: "Mint Green Tea",
    price: 22,
    quantity: 18,
    category: "Green Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from various regions, blending green tea with dried mint leaves.",
      },
      {
        header: "Processing",
        description:
          "Green tea leaves blended with peppermint or spearmint leaves.",
      },
      {
        header: "Flavor",
        description:
          "Refreshing and cooling with a bright minty flavor and a hint of green tea.",
      },
      {
        header: "Health Benefits",
        description:
          "Soothing for digestion, freshens breath, and provides antioxidants.",
      },
    ],
  },
  {
    id: 28,
    name: "Assam",
    price: 15,
    quantity: 25,
    category: "Black Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Originating from the Assam region in Northeast India.",
      },
      {
        header: "Processing",
        description:
          "Fully oxidized, resulting in a bold, malty flavor and a rich, red liquor.",
      },
      {
        header: "Flavor",
        description:
          "Strong and robust with notes of malt, honey, and sometimes caramel.",
      },
      {
        header: "Health Benefits",
        description:
          "High in caffeine, boosts energy, aids digestion, and supports heart health.",
      },
    ],
  },
  {
    id: 29,
    name: "Darjeeling",
    price: 20,
    quantity: 10,
    category: "Black Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from the Darjeeling district in West Bengal, India.",
      },
      {
        header: "Processing",
        description:
          "Partially oxidized, often referred to as the 'Champagne of teas.'",
      },
      {
        header: "Flavor",
        description:
          "Delicate and floral with muscatel grape notes and a crisp, clean finish.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, may improve digestion, and promote relaxation.",
      },
    ],
  },
  {
    id: 30,
    name: "Ceylon",
    price: 25,
    quantity: 15,
    category: "Black Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Originating from Sri Lanka, formerly known as Ceylon.",
      },
      {
        header: "Processing",
        description:
          "Fully oxidized, offering a variety of flavors depending on region and elevation.",
      },
      {
        header: "Flavor",
        description:
          "Ranges from brisk and citrusy to rich and malty, depending on grade.",
      },
      {
        header: "Health Benefits",
        description:
          "High in antioxidants, boosts energy, and supports immune function.",
      },
    ],
  },
  {
    id: 31,
    name: "English Breakfast",
    price: 18,
    quantity: 12,
    category: "Black Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Originally created in Scotland, now popular worldwide.",
      },
      {
        header: "Processing",
        description:
          "Blend of black teas from various regions, typically Assam, Ceylon, and Kenya.",
      },
      {
        header: "Flavor",
        description:
          "Robust and full-bodied with malty and slightly astringent notes.",
      },
      {
        header: "Health Benefits",
        description:
          "High in caffeine, boosts energy, aids digestion, and supports heart health.",
      },
    ],
  },
  {
    id: 32,
    name: "Earl Grey",
    price: 30,
    quantity: 8,
    category: "Black Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from the tea gardens of India, specifically Assam and Darjeeling.",
      },
      {
        header: "Processing",
        description:
          "Black tea flavored with oil extracted from the rind of bergamot oranges.",
      },
      {
        header: "Flavor",
        description:
          "Citrusy and floral with a hint of sweetness and a refreshing bergamot aroma.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, aids digestion, and may improve mood and focus.",
      },
    ],
  },
  {
    id: 33,
    name: "Keemun",
    price: 35,
    quantity: 20,
    category: "Black Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from Qimen County, Huangshan City, Anhui Province, China.",
      },
      {
        header: "Processing",
        description:
          "Fully oxidized, resulting in a bold and robust flavor profile.",
      },
      {
        header: "Flavor",
        description:
          "Has a winey, fruity aroma with hints of chocolate and floral notes.",
      },
      {
        header: "Health Benefits",
        description:
          "May help lower cholesterol levels and improve heart health.",
      },
    ],
  },
  {
    id: 34,
    name: "Russian Caravan",
    price: 22,
    quantity: 18,
    category: "Black Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Traditionally transported from China to Russia via camel caravan.",
      },
      {
        header: "Processing",
        description:
          "Blend of black teas, often Lapsang Souchong, Keemun, and other Chinese teas.",
      },
      {
        header: "Flavor",
        description:
          "Rich and smoky with hints of pine, popular for its bold and robust character.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, aids digestion, and may improve focus and concentration.",
      },
    ],
  },
  {
    id: 35,
    name: "Pu-erh",
    price: 15,
    quantity: 25,
    category: "Black Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Originating from Yunnan Province, China.",
      },
      {
        header: "Processing",
        description:
          "Post-fermented and aged, resulting in a unique earthy flavor.",
      },
      {
        header: "Flavor",
        description:
          "Smooth and mellow with distinct earthy, woody, and sometimes smoky notes.",
      },
      {
        header: "Health Benefits",
        description:
          "May aid digestion, promote weight loss, and reduce cholesterol levels.",
      },
    ],
  },
  {
    id: 36,
    name: "Chamomile",
    price: 18,
    quantity: 12,
    category: "Herbal Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from the daisy-like flowers of the Matricaria chamomilla plant.",
      },
      {
        header: "Processing",
        description:
          "Dried chamomile flowers used to brew a caffeine-free infusion.",
      },
      {
        header: "Flavor",
        description:
          "Mild, floral, and slightly sweet with a soothing and calming effect.",
      },
      {
        header: "Health Benefits",
        description:
          "Promotes relaxation, aids digestion, and may help improve sleep quality.",
      },
    ],
  },
  {
    id: 37,
    name: "Peppermint",
    price: 20,
    quantity: 10,
    category: "Herbal Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from the leaves of the Mentha piperita plant.",
      },
      {
        header: "Processing",
        description:
          "Dried peppermint leaves used to brew a caffeine-free infusion.",
      },
      {
        header: "Flavor",
        description:
          "Cooling and refreshing with a strong minty flavor and a clean finish.",
      },
      {
        header: "Health Benefits",
        description:
          "Soothes digestion, relieves headaches, and has antibacterial properties.",
      },
    ],
  },
  {
    id: 38,
    name: "Lemon Ginger",
    price: 25,
    quantity: 15,
    category: "Herbal Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Combination of lemon zest and ginger root.",
      },
      {
        header: "Processing",
        description:
          "Dried lemon peel and ginger root used to brew a caffeine-free infusion.",
      },
      {
        header: "Flavor",
        description:
          "Bright and zesty with a spicy kick from the ginger, warming and invigorating.",
      },
      {
        header: "Health Benefits",
        description:
          "Soothes digestion, boosts immunity, and provides antioxidant benefits.",
      },
    ],
  },
  {
    id: 39,
    name: "Rooibos",
    price: 30,
    quantity: 8,
    category: "Herbal Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from the leaves of the Aspalathus linearis plant in South Africa.",
      },
      {
        header: "Processing",
        description:
          "Fermented and dried, resulting in a reddish-brown color and unique flavor.",
      },
      {
        header: "Flavor",
        description:
          "Sweet and nutty with hints of caramel and vanilla, naturally caffeine-free.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in antioxidants, supports heart health, and may alleviate allergies.",
      },
    ],
  },
  {
    id: 40,
    name: "Hibiscus",
    price: 35,
    quantity: 20,
    category: "Herbal Tea",
    subtitles: [
      {
        header: "Origin",
        description:
          "Originating from the dried petals of the Hibiscus sabdariffa flower.",
      },
      {
        header: "Processing",
        description:
          "Dried hibiscus flowers used to brew a caffeine-free infusion.",
      },
      {
        header: "Flavor",
        description:
          "Tart and tangy with a bright crimson color, reminiscent of cranberries.",
      },
      {
        header: "Health Benefits",
        description:
          "Rich in vitamin C, supports heart health, and may help lower blood pressure.",
      },
    ],
  },
  {
    id: 41,
    name: "Chamomile Lavender",
    price: 22,
    quantity: 18,
    category: "Herbal Tea",
    subtitles: [
      {
        header: "Origin",
        description: "Combination of chamomile flowers and lavender buds.",
      },
      {
        header: "Processing",
        description:
          "Dried chamomile flowers and lavender buds used to brew a caffeine-free infusion.",
      },
      {
        header: "Flavor",
        description:
          "Soothing and floral with a hint of sweetness and a calming lavender aroma.",
      },
      {
        header: "Health Benefits",
        description:
          "Promotes relaxation, aids digestion, and may help improve sleep quality.",
      },
    ],
  },
];

// Array of image links
var images = [
  "../img/oolongtea.jpg",
  "../img/illamtea.jpg",
  "../img/whitetea.jpg",
  "https://wapnepal.com.np/wp-content/uploads/2017/04/Nepali-tea.jpg",
  "https://lazyliteratus.teatra.de/files/2016/02/Nepali-green-tea.png",
  "https://img.theculturetrip.com/1440x/smart/wp-content/uploads/2017/02/5938066996_068ff9e0e4_b.jpg",
  "https://img.visiontimes.com/2021/05/pexels-jose-esquivel-6351839.jpg",
  "https://eatconnection.com/wp-content/uploads/2021/01/tea-1.jpg",
  "https://royaltipstea.com/blog/wp-content/uploads/2017/11/tipos-de-te-verde-chino-1.jpg",
  "https://tse3.mm.bing.net/th?id=OIP.M8-q1WS2fYrJlJ-ySv_xoQHaE7&pid=Api&P=0&h=180",
  "https://www.teacachai.com/wp-content/uploads/2018/05/IMG_9749.jpg",
  "https://tse1.mm.bing.net/th?id=OIP.YcgVarl98XnjWS6h2xzWeAHaE8&pid=Api&P=0&h=180",
  "https://tse4.mm.bing.net/th?id=OIP.O4iZSCQQKgswQD00phHlTQHaEK&pid=Api&P=0&h=180",
  "https://tse4.mm.bing.net/th?id=OIP.clKBZKpjL_TojspiYDOe_wHaFj&pid=Api&P=0&h=180",
  "https://wallpaperaccess.com/full/336766.jpg",
  "https://cdn.tasteatlas.com/images/ingredients/8a430e380e434b438172e4f1cdce8237.jpg?w=905&h=510",
  "https://trulyexperiences.com/blog/wp-content/uploads/2015/06/Japanese_Tea_in_Cup.jpg",
  "https://media.istockphoto.com/id/1262729056/photo/fruit-tea-with-oranges-cinnamon-and-rosemary.jpg?s=612x612&w=0&k=20&c=MBmvnVZs9mMxNDdWREAmpYbje1ETIuQG6Ftla-_QStw=",
  "https://media.istockphoto.com/id/466073662/photo/tea-cup-on-saucer-with-tea-being-poured.jpg?s=612x612&w=0&k=20&c=skmYl4zd-1Op_YF0pYVh2is4D6fakwK2LPFpRZRMB9U=",
  "https://media.istockphoto.com/id/1389207162/photo/glass-cup-with-hot-tea-and-a-kettle-on-a-bright-table-by-the-window-tray-with-different.jpg?s=612x612&w=0&k=20&c=a2zQ83tCDB-DwWutPq1CRU0qnclLsHQHc8nqYq1qNE0=",
  "https://media.istockphoto.com/id/1351381197/photo/warm-green-tea-on-a-wooden-table.jpg?s=612x612&w=0&k=20&c=YvkJQMMCJOK1hle49lLPgWeD3D4n-szhnalc3Aq7aaI=",
  "https://media.istockphoto.com/id/1193396586/photo/white-cup-of-healthy-rosemary-tea-pouring-from-teapot-with-fresh-rosemary-bunch-on-white.jpg?s=612x612&w=0&k=20&c=R9MuAX_P4RZbaKlMPUH3d7Kd-nP-adJJRdJ7OCwm7zE=",
  "https://media.istockphoto.com/id/1015308848/photo/process-brewing-tea-tea-ceremony-cup-of-freshly-brewed-fruit-and-herbal-tea-dark-mood-hot.jpg?s=612x612&w=0&k=20&c=tMG594LYE3nSE7sn3OuX77R9U64kwBLZl-Vv-bnj9xM=",
  "https://media.istockphoto.com/id/1310767062/vector/set-of-coffee-and-tea-line-icons-vector-illustration-editable-stroke-64x64-pixel-perfect.jpg?s=612x612&w=0&k=20&c=NmI-nfov4SKg-40BDNi4PhHyTQJdjHxXhYc-u2eF21U=",
  "https://media.istockphoto.com/id/1327091626/photo/two-cups-with-coffee-and-green-tea.jpg?s=612x612&w=0&k=20&c=IkHF0BUPGvvK_as11RRLcR2JJbL7pMS3hETc51qkmu8=",
  "https://media.istockphoto.com/id/968554692/vector/green-tea-sketch-vector-illustration-leaves-teapot-and-cup-hand-drawn-isolated-design-elements.jpg?s=612x612&w=0&k=20&c=VwMu19C-J_JuFjPhzehNl2aZYwazFEbx-kWgNE1NxhQ=",
  "https://media.istockphoto.com/id/1200730108/photo/colorful-tea-selection-different-types-of-loose-tea-in-small-cups.jpg?s=612x612&w=0&k=20&c=88r_vbJRXzZEKDSJ49_tF51E7R3QdpDp5VchJbz-xpw=",
  "https://media.istockphoto.com/id/1130648900/photo/cup-of-tea-cinnamon-sticks-anise-dried-orange-on-wooden-table.jpg?s=612x612&w=0&k=20&c=xT2qa_oK1cKOB1hfWxzxDlSeLMiy3r6Lhxr8ssaoqxg=",
  "https://media.istockphoto.com/id/1262209851/photo/herbal-tea-and-espresso-coffee.jpg?s=612x612&w=0&k=20&c=lGMYEIB2aMOpEV8xWNhfIMF6za46z-gXcVlAbCQxfxE=",
  "https://media.istockphoto.com/id/1353366698/photo/tea-leaves-in-a-wooden-plate-and-spoon-on-a-black-background.jpg?s=612x612&w=0&k=20&c=lxQnmWX6d-qLSLQqEOyvHhMflvffuZsegGgeVELzWE0=",
  "https://media.istockphoto.com/id/1155623658/photo/a-glass-of-frozen-lemon-black-tea-on-a-white-background.jpg?s=612x612&w=0&k=20&c=7iywxLD_Ye_4lfAYzCHWz8dPYi5m1toTuWCx0w2P54g=",
  "https://media.istockphoto.com/id/1080387570/photo/hot-fruit-tea-with-oranges-and-cinnamon.jpg?s=612x612&w=0&k=20&c=1csIOi09ZKS19q-lfdhcU9MWR3jdvBJLcJOIs4MvMfk=",
  "https://media.istockphoto.com/id/1294933580/photo/glass-cup-of-brewed-black-turkish-tea-traditional-hot-drink-concept.jpg?s=612x612&w=0&k=20&c=-kBWOzRCiKts7QJgihV7j2nrgKgP-yPX7YIx5c5FOp8=",
  "https://media.istockphoto.com/id/1147846777/photo/ice-tea-with-lemon-and-mint-in-a-jar.jpg?s=612x612&w=0&k=20&c=LrCa7Ny9H580VptcQvtR0t9lCNM1Af-IaLMl3LC52fc=",
  "https://media.istockphoto.com/id/955162416/photo/various-leaves-of-tea-and-spices-on-wooden-background.jpg?s=612x612&w=0&k=20&c=y_BQJlVan9aHxAsB6YhSw8T3x752FaGw_K-gGTdXL7c=",
  "https://media.istockphoto.com/id/1353679270/vector/tea-seamless-pattern-hand-drawn-tea-leaf-vector-illustration-vintage-packaging-design.jpg?s=612x612&w=0&k=20&c=R5RChbNln5fsyNoH9jiXUGAz6a20HCW-uUHgka7vlLM=",
  "https://media.istockphoto.com/id/1137365972/photo/close-up-of-steaming-cup-of-coffee-or-tea-on-vintage-table-early-morning-breakfast-on-rustic.jpg?s=612x612&w=0&k=20&c=-XbehJve0dz0daS_jVi2VLmlVMGrwPIQRdaFWChKFsM=",
  "https://media.istockphoto.com/id/1185715795/photo/cup-of-tea-with-lemon-and-a-cup-of-coffee-on-a-wooden-surface-the-choice-between-coffee-and.jpg?s=612x612&w=0&k=20&c=n0yffCFbcBZkvXWxCue8wpXwMwfyu8jN0VbIns_gnzs=",
  "https://media.istockphoto.com/id/534111760/photo/tea-plantation-in-cameron-highlands-malaysia.jpg?s=612x612&w=0&k=20&c=JjZV1FSztAZb5DQL2hmg5feI6FgaXJXg83WsEGc0_nY=",
  "https://media.istockphoto.com/id/1250261109/photo/green-tea-plant-leaf-on-white-background.jpg?s=612x612&w=0&k=20&c=wxhi1vtTIBI26d4XY5SK_HcjpSM4mQ1eVfNVQAPk6oc=",
  "https://media.istockphoto.com/id/1042301506/vector/mug-with-tea-and-steam-in-a-flat-style-vector-clipart.jpg?s=612x612&w=0&k=20&c=cguumvf6W5iUqLAr9rL3S6VfsMaIdH_T2uI3cmVMfJ8=",
  "https://media.istockphoto.com/id/697020580/photo/ice-tea.jpg?s=612x612&w=0&k=20&c=ZMyYM8oQs_S5ZwLh3WiUFm9IPXe0qcW21slSW-r8SCA=",
  "https://media.istockphoto.com/id/531263883/photo/tea.jpg?s=612x612&w=0&k=20&c=J2Gi8yU4jZFR9JIMDtbj20-e8Vrk60nPR3MmEGW96D8=",
  "https://media.istockphoto.com/id/1325865138/photo/composition-with-different-teas-and-spoons-on-light-grey-stone-table-space-for-text.jpg?s=612x612&w=0&k=20&c=_XcqecZkEFmg7WLYSKDkRYkzpllPCqoRbz9TTT0PT58=",
  "https://media.istockphoto.com/id/1001387004/photo/top-view-of-a-cup-of-tea.jpg?s=612x612&w=0&k=20&c=1Fdior3aNZmB4Fno1Ibve7ZK7VMeVjUzvk6RHNnk3aU=",
  "https://media.istockphoto.com/id/1401730890/photo/pitcher-of-cold-ice-tea-with-rural-summer-background.jpg?s=612x612&w=0&k=20&c=VJzr4VCSJR5yXxZaBUvUv2ltrntv3i6r08UBf4Oooc4=",
  "https://media.istockphoto.com/id/1143044675/photo/various-tea-black-green-and-red-tea.jpg?s=612x612&w=0&k=20&c=5w-KmF2eMPRy5bU1q3uujhFdurF_O2u7lrzbJabNkcc=",
  "https://media.istockphoto.com/id/1340669148/vector/realistic-3d-cup-with-green-and-black-tea-leaves-and-pyramid-teabag-cups-with-hot-drink-side.jpg?s=612x612&w=0&k=20&c=hgV9f7wXRSOyS40cqIVev1L1Qb39AkYEtHnqT2K4dw0=",
  "https://media.istockphoto.com/id/1405136378/vector/green-leaves-geometric-pattern.jpg?s=612x612&w=0&k=20&c=Fqo_cESrMnLFLLlmW-FzTtwfYkgJb6ytIs3zS6dIRwQ=",
  "https://media.istockphoto.com/id/1174151804/photo/healthy-green-tea.jpg?s=612x612&w=0&k=20&c=BU4DUJuRFhiuyFlbJAUvh2p6ukC3RuyA6ZEBeo4yHFk=",
  "https://media.istockphoto.com/id/1332102430/vector/set-of-realistic-green-tea-leaves-and-sprouts-isolated-on-white-background-sprig-of-green.jpg?s=612x612&w=0&k=20&c=H2risYwbUss28iPaXkKaa_VTRTT5ooQNyxOnYYT-96I=",
  "https://media.istockphoto.com/id/1211948299/photo/young-woman-drinking-tea.jpg?s=612x612&w=0&k=20&c=an0U5aEYtKr4Eo_HE2fUOD9tskXSgV9clRwPJiSP34k=",
  "https://media.istockphoto.com/id/167463449/photo/close-up-of-smiling-woman-drinking-tea-outdoors.jpg?s=612x612&w=0&k=20&c=o9KGQZzFKGIESB1b03z6sKXXYQxOI-0hpWNRfd2L6Wg=",
  "https://media.istockphoto.com/id/990860244/vector/tea-icons.jpg?s=612x612&w=0&k=20&c=x07TwYx-NPhoeOBATQFM7EjGSLAqDbDPz6uqj1P6fC8=",
  "https://media.istockphoto.com/id/508297600/photo/turkish-tea.jpg?s=612x612&w=0&k=20&c=LWn9TNlKVpn-PzyWJSbQxDQozWujqkMORWJw1bBZuqI=",
  "https://media.istockphoto.com/id/590242446/photo/ginger-root-tea-with-lemon-honey-and-mint.jpg?s=612x612&w=0&k=20&c=VTpEVtGkxAChPr0D9EPnleqcEHY-xaJlA-hph0VFaJ8=",
  "https://media.istockphoto.com/id/690507630/photo/mason-jar-glass-of-iced-tea-with-straw-isolated-on-white.jpg?s=612x612&w=0&k=20&c=IQft93o9oxBZeJrCqfuaWD9PxQ23N8jtEFFQhu5MJ40=",
  "https://media.istockphoto.com/id/157585052/photo/iced-tea-close-up-background.jpg?s=612x612&w=0&k=20&c=If0SbjM4E2MJ_h-ucdtNTVJD4j-Vvd2tcvSVgx1iakU=",
  "https://media.istockphoto.com/id/861180142/photo/ginger-homemade-tea-infusion-on-wooden-board-with-lemon.jpg?s=612x612&w=0&k=20&c=Xl9dKcYHzwbBABk_a8tdhDQuT0IKwAqivrwXNESxG_g=",
  "https://media.istockphoto.com/id/1288213144/vector/tea-mug-icon-vector-design.jpg?s=612x612&w=0&k=20&c=bFr93TlwCHa9nwgqsYOxq7wbTTdI1QMqw8zzZm5TFco=",
  "https://media.istockphoto.com/id/595746060/vector/tea-set-on-white-background.jpg?s=612x612&w=0&k=20&c=2OV_Uz2FoCTtNEEY6pNIxlSMokVYMshgBlY2LiyOm7E=",
  "https://media.istockphoto.com/id/928034704/photo/woman-with-herbal-tea.jpg?s=612x612&w=0&k=20&c=EwlWrDixyOFwFQuOpXwzlfmzTbSXlc6zrH7aW2rldic=",
  "https://media.istockphoto.com/id/1441569995/photo/close-up-shot-of-a-poring-milk-in-a-hot-tea.jpg?s=612x612&w=0&k=20&c=HgmuhYG_Qds7SMUGTKa3SOyrZD0kOz6rguMnZiNv6RI=",
  "https://media.istockphoto.com/id/1197310688/photo/harvest-on-tea-plantation.jpg?s=612x612&w=0&k=20&c=-TgruMQGOYMRawD4-Mpt6OuDD4vwgO9JVsXW_5rXJ9U=",
  "https://media.istockphoto.com/id/114452963/photo/mugs-with-drinks.jpg?s=612x612&w=0&k=20&c=PZh79LinsNfyRltvziFnCTQNLl-LRNx262L2RR60jRs=",
  "https://media.istockphoto.com/id/827215724/photo/a-cup-of-freshly-brewed-black-tea-escaping-steam-warm-soft-light-darker-background.jpg?s=612x612&w=0&k=20&c=imnF_AExFoho0c_mkRITlwHxDyG3O-Re_ZEfNxbAKn8=",
];
