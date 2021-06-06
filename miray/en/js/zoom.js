var m_area=document.getElementById("m_area");
var m_img=document.getElementById("m_img");

m_area.addEventListener("mousemove",function (event) {
    clientX=event.clientX - m_area.offsetLeft
    clientY=event.clientY - m_area.offsetTop

    mWidth=m_area.offsetWidth
    mHeight=m_area.offsetHeight

    clientX=clientX/mWidth*100
    clientY=clientY/mHeight*100


    m_img.style.transform='translate(-'+clientX+'%,-'+clientY+'%) scale(2)'
    //m_img.style.transform='translate(-50%,-50%) scale(2)'
});
m_area.addEventListener("mouseleave",function () {
    m_img.style.transform='translate(-50%,-50%) scale(1)'
});