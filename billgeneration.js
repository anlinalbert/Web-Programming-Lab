function order() {
    var input = document.getElementsByName("product");
    var total = 0;

    for (var i = 0; i < input.length; i++) {
      if (input[i].checked)
        total += parseFloat(input[i].value);
    }
    document.getElementById("total").value = "Rs " + total.toFixed(2);
}

function buy() {
    var input = document.getElementsByName("product");
    var total = 0;

    for (var i = 0; i < input.length; i++) {
        if (input[i].checked)
          total += parseFloat(input[i].value);
    }

    alert("Ordered successfully. Total cost = Rs " + total);
}