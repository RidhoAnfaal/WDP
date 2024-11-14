function calculatePrice() {
    let countTotalLaundry = localStorage.getItem('countTotalLaundry');
    let numberTotalLaundry = countTotalLaundry ? parseInt(countTotalLaundry, 10) : 0;

    let weight = parseInt(document.getElementById("weight").value);

    if (numberTotalLaundry > 5) {
      if (weight > 2) {
        weight = weight - 2
      }
    }
    
    const servicePricePerKg = parseInt(
      document.getElementById("service").value
    );
    const typeAdditionalFeePerKg = parseInt(
      document.getElementById("type").value
    );
    const discountRate = parseFloat(
      document.getElementById("discount").value
    );
  
    let basePrice = weight * servicePricePerKg;
  
    let additionalCost = weight * typeAdditionalFeePerKg;
  
    let totalPrice = basePrice + additionalCost;
  
    let discount = totalPrice * discountRate;
    let finalPrice = totalPrice - discount;

    document.getElementById("result1").innerHTML = `
      <h5>Total Price is ${totalPrice}</h5>
    `;
    document.getElementById("result2").innerHTML = `
      <h5>Discount is ${discount}</h5>
    `;
    document.getElementById("result3").innerHTML = `
      <h5 style="color: red;">Total Payment is ${finalPrice}</h5>
    `;

    if (countTotalLaundry) {
      countTotalLaundry = parseInt(countTotalLaundry, 10) + 1;
    } else {
      countTotalLaundry = 1;
    }

    localStorage.setItem('countTotalLaundry', countTotalLaundry.toString());
}