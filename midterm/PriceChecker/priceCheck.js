function calculatePrice() {
    const weight = parseInt(document.getElementById("weight").value);
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
}