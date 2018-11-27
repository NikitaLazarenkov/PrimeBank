$(function() {
    var arr = [0, 0, 0, 0];

    function fn() {
        $("#contentSlider").html(addSpaces(arr[0]));
        $("#contentSlider2").html(arr[1]);
        if (arr[0] <= 1000000 && arr[1] <= 12)
		{
			arr[2] = 3000;
		}
		else if (arr[0] <= 1000000 && arr[1] > 12)
		{
			arr[2] = 250 * arr[1];
		}
        else if (arr[0] > 1000000 && arr[1] >= 12)
        {
            arr[2] = arr[0] * arr[1] / 12 * 1.5 / 100;
        }
        else
        {
            arr[2] = arr[0] * arr[1] * 0.5 / 100;
        }


        $("#calc-summ").html(addSpaces(arr[2].toFixed()));
        arr[3] = arr[2] * 1.4;
        $("#calc-market").html(addSpaces(arr[3].toFixed()));
    }
    $("#slider").slider({
        range: "min",
        value: 5E7,
        min: 1E5,
        max: 1E8,
        step: 1E5,
        slide: function(event, ui) {
            arr[0] = +ui.value;
            fn()
        },
        change: function(event, ui) {
            arr[0] = +ui.value;
            fn()
        }
    });
    $("#slider").slider("option", "value", 5E7);

    function addSpaces(nStr) {
        nStr += "";
        x = nStr.split(".");
        x1 = x[0];
        x2 = x.length > 1 ? "." + x[1] : "";
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) x1 = x1.replace(rgx,
            "$1" + " " + "$2");
        return x1 + x2
    }
    $("#slider2").slider({
        range: "min",
        value: 24,
        min: 1,
        max: 80,
        step: 1,
        slide: function(event, ui) {
            arr[1] = +ui.value;
            fn()
        },
        change: function(event, ui) {
            arr[1] = +ui.value;
            fn()
        }
    });
    $("#slider2").slider("option", "value", 24)
});