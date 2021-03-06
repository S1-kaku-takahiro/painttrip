var category = document.getElementById("category");
var subcategory = document.getElementById("subcategory");

category.onchange = changeCategory;
subcategory.onchange = changeSubcategory;

window.onload = function() {

    changeCategory();
    subcategory.value = $('input:hidden[name="hiddenSubcategory"]').val();
};

function changeCategory() {
    
    var option = document.createElement("option");
    option.value = "";
    option.text = "選択してください";
    
    subcategory.textContent = null;
    subcategory.appendChild(option);
    
    var options;
    
    switch(category.value){
        case("1"):
            options = setAccommodation();
            break;
        case("2"):
            options = setSightseeing();
            break;
        case("3"):
            options = setSpa();      
            break;
        case("4"):
            options = setGourmet();
            break;
        case("5"):
            options = setActivity();
            break;
        case("6"):
            options = setShopping();
            break;
        case("7"):
            options = setOther();
            break;
    }
    
    
    options.forEach(function(value) {

        var option = document.createElement("option");

        option.value = value.cd;
        option.text = value.label;

        subcategory.appendChild(option);
  });

}


// サブカテゴリーを3桁の整数で割り振る
function setAccommodation() {

    var accomodations = [
        {cd:"101", label:"ホテル"},
        {cd:"102", label:"旅館"},
        {cd:"103", label:"ビジネスホテル"},
        {cd:"104", label:"民宿"},
        {cd:"105", label:"ゲストハウス"},
        {cd:"106", label:"カプセルホテル"},
        {cd:"107", label:"ペンション"},
        {cd:"108", label:"キャンプ"},
        {cd:"109", label:"その他宿泊"}
    ];

    return accomodations;
}

function setSightseeing() {

    var sightseeings = [
        {cd:"201", label:"神社・お寺"},
        {cd:"202", label:"城"},
        {cd:"203", label:"水族館"},
        {cd:"204", label:"動物園"},
        {cd:"205", label:"遊園地"},
        {cd:"206", label:"美術館"},
        {cd:"207", label:"博物館"},
        {cd:"208", label:"その他観光"}
    ];

    return sightseeings;
}

function setSpa() {

    var spas = [
        {cd:"301", label:"温泉"},
        {cd:"302", label:"スパ"},
        {cd:"303", label:"銭湯"},
        {cd:"304", label:"サウナ"},
        {cd:"305", label:"岩盤浴"},
        {cd:"306", label:"その他温泉・スパ"}
    ];

    return spas;
}

function setGourmet() {

    var gourmets = [
        {cd:"401", label:"フレンチ"},
        {cd:"402", label:"イタリアン"},
        {cd:"403", label:"スペイン料理"},
        {cd:"404", label:"中華料理"},
        {cd:"405", label:"韓国料理"},
        {cd:"406", label:"アジア・エスニック"},
        {cd:"407", label:"和食"},
        {cd:"408", label:"寿司"},
        {cd:"409", label:"焼肉"},
        {cd:"410", label:"鍋"},
        {cd:"410", label:"天ぷら"},
        {cd:"412", label:"ラーメン"},
        {cd:"413", label:"カレー"},
        {cd:"414", label:"ビュッフェ"},
        {cd:"415", label:"バー"},
        {cd:"416", label:"カフェ"},
        {cd:"417", label:"その他グルメ"}
    ];

    return gourmets;
}

function setActivity() {

    var activities = [
        {cd:"501", label:"川・湖"},
        {cd:"502", label:"マリンスポーツ"},
        {cd:"503", label:"スカイスポーツ"},
        {cd:"504", label:"大地・山"},
        {cd:"505", label:"ウィンタースポーツ"},
        {cd:"506", label:"その他アクティビティ"}
    ];
    
    return activities;
}

function setShopping() {

    var shoppings = [
        {cd:"601", label:"雑貨"},
        {cd:"602", label:"ファッション"},
        {cd:"603", label:"お菓子"},
        {cd:"604", label:"食べ物"},
        {cd:"605", label:"お酒"},
        {cd:"606", label:"その他買い物"}
    ];

    return shoppings;
}

function setOther() {

    var others = [
        {cd: "701", label:"その他"}
    ];

    return others;
}

function changeSubcategory() {
    document.getElementById("hiddenSubcategory").setAttribute("value", subcategory.value);
}
