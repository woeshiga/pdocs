function changeAttr(e) {
    let valBlock = document.getElementById("val_block");
    valBlock.innerHTML = "";
    if (e.value == "date") {
        valBlock.innerHTML = `
        <label>С:</label>
        <input type="date" name="from">
        <label>По:</label>
        <input type="date" name="to"> 
        `;
    } else {
        valBlock.innerHTML = `
        <label>Операция:</label>
        <select name="operation">
        <option value="=">=</option>
        <option value="LIKE">Содержит</option>
        </select>
        <label>Значение:</label>
        <input type="text" name="value"> 
        `;
    }
}