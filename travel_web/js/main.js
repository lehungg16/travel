// LANGUAGE
let lang="vi";
function toggleLang(){
lang=(lang==="vi")?"en":"vi";
document.querySelectorAll("[data-vi]").forEach(el=>{
el.innerText=el.getAttribute("data-"+lang);
});
document.querySelector(".lang-btn").innerText=lang==="vi"?"EN":"VI";
}
toggleLang();toggleLang();

// ANIMATION
window.addEventListener("scroll",()=>{
document.querySelectorAll(".fade").forEach(el=>{
if(el.getBoundingClientRect().top < window.innerHeight-100){
el.classList.add("show");
}
});
});

// BOOKING
let currentTour="",currentPrice=0;

function openBooking(name,price){
currentTour=name;
currentPrice=price;
document.getElementById("tourName").innerText="Đặt tour: "+name;
document.getElementById("tourText").innerText=name;
document.getElementById("priceText").innerText=price+" VNĐ";
document.getElementById("bookingModal").style.display="flex";
}

function closeBooking(){
document.getElementById("bookingModal").style.display="none";
}

function submitBooking(){
let data={
name:document.getElementById("name").value,
phone:document.getElementById("phone").value,
people:document.getElementById("people").value,
date:document.getElementById("date").value,
tour:currentTour,
price:currentPrice,
status:"Chờ xử lý"
};

let bookings=JSON.parse(localStorage.getItem("bookings"))||[];
bookings.push(data);
localStorage.setItem("bookings",JSON.stringify(bookings));

alert("✅ Đặt tour thành công!");
closeBooking();
}