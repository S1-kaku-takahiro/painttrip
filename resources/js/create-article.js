window.onload = function() {

  subcategory = document.getElementById("subcategory");

  category = document.getElementById("category");

  category.onchange = changeCategory;

}

function changeCategory() {

  var changedCategory = category.value;

  if (changedCategory == "accommodation") {

    setAccommodation();

  } else if (changedCategory == "sightseeing") {

    setSightseeing();

  } else if (changedCategory == "spa") {

    setSpa();

  } else if (changedCategory == "gourmet") {

    setGourmet();

  } else if (changedCategory == "activity") {

    setActivity();

  } else if (changedCategory == "shopping") {

    setShopping();

  } else if (changedCategory == "other") {

    setOther();

  }

}

function setAccommodation() {

  subcategory.textContent = null;

  var accomodations = [

    {cd:"", label:"選択してください"},

    {cd:"0", label:"ホテル"},

    {cd:"1", label:"旅館"},

    {cd:"2", label:"ビジネスホテル"},
    
    {cd:"3", label:"民宿"},
    
    {cd:"4", label:"ゲストハウス"},
    
    {cd:"5", label:"カプセルホテル"},
    
    {cd:"6", label:"ペンション"},
    
    {cd:"7", label:"キャンプ"},
    
    {cd:"8", label:"その他宿泊"}
    
  ];

  accomodations.forEach(function(value) {

    var op = document.createElement("option");

    op.value = value.cd;

    op.text = value.label;

    subcategory.appendChild(op);

  });

}

function setSightseeing() {

  subcategory.textContent = null;

  var sightseeings = [

    {cd:"", label:"選択してください"},

    {cd:"9", label:"神社・お寺"},

    {cd:"10", label:"城"},

    {cd:"11", label:"水族館"},
    
    {cd:"12", label:"動物園"},
    
    {cd:"13", label:"遊園地"},
    
    {cd:"14", label:"美術館"},
    
    {cd:"15", label:"博物館"},
    
    {cd:"16", label:"その他観光"}
  ];

  sightseeings.forEach(function(value) {

    var op = document.createElement("option");

    op.value = value.cd;

    op.text = value.label;

    subcategory.appendChild(op);

  });

}

function setSpa() {

  subcategory.textContent = null;

  var spas = [

    {cd:"", label:"選択してください"},

    {cd:"17", label:"温泉"},

    {cd:"18", label:"スパ"},
    
    {cd:"19", label:"銭湯"},

    {cd:"20", label:"サウナ"},

    {cd:"21", label:"岩盤浴"},
    
    {cd:"22", label:"その他温泉・スパ"}
    
  ];

  spas.forEach(function(value) {

    var op = document.createElement("option");

    op.value = value.cd;

    op.text = value.label;

    subcategory.appendChild(op);

  });

}

function setGourmet() {

  subcategory.textContent = null;

  var gourmets = [

    {cd:"", label:"選択してください"},

    {cd:"23", label:"フレンチ"},

    {cd:"24", label:"イタリアン"},
    
    {cd:"25", label:"スペイン料理"},

    {cd:"26", label:"中華料理"},

    {cd:"27", label:"韓国料理"},
    
    {cd:"28", label:"アジア・エスニック"},
    
    {cd:"29", label:"和食"},
    
    {cd:"30", label:"寿司"},

    {cd:"31", label:"焼肉"},
    
    {cd:"32", label:"鍋"},
    
    {cd:"33", label:"天ぷら"},
    
    {cd:"34", label:"ラーメン"},
    
    {cd:"35", label:"カレー"},

    {cd:"36", label:"ビュッフェ"},
    
    {cd:"37", label:"バー"},
    
    {cd:"38", label:"カフェ"},
    
    {cd:"39", label:"その他グルメ"}
    
  ];

  gourmets.forEach(function(value) {

    var op = document.createElement("option");

    op.value = value.cd;

    op.text = value.label;

    subcategory.appendChild(op);

  });

}

function setActivity() {

  subcategory.textContent = null;

  var activities = [

    {cd:"", label:"選択してください"},

    {cd:"40", label:"川・湖"},

    {cd:"41", label:"マリンスポーツ"},
    
    {cd:"42", label:"スカイスポーツ"},

    {cd:"43", label:"大地・山"},

    {cd:"44", label:"ウィンタースポーツ"},
    
    {cd:"45", label:"その他アクティビティ"}
    
  ];

  activities.forEach(function(value) {

    var op = document.createElement("option");

    op.value = value.cd;

    op.text = value.label;

    subcategory.appendChild(op);

  });

}

function setShopping() {

  subcategory.textContent = null;

  var shoppings = [

    {cd:"", label:"選択してください"},

    {cd:"46", label:"雑貨"},

    {cd:"47", label:"ファッション"},
    
    {cd:"48", label:"お菓子"},

    {cd:"49", label:"食べ物"},

    {cd:"50", label:"お酒"},
    
    {cd:"51", label:"その他買い物"}
    
  ];

  shoppings.forEach(function(value) {

    var op = document.createElement("option");

    op.value = value.cd;

    op.text = value.label;

    subcategory.appendChild(op);

  });

}

function setOther() {

    subcategory.textContent = "52";

    var others = [

        {cd:"52", label:"その他"},

    ];

  others.forEach(function(value) {

    var op = document.createElement("option");

    op.value = value.cd;

    op.text = value.label;

    subcategory.appendChild(op);

  });
}