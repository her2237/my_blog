console.clear();

function Wrapper__init() {
  const wrapper = document.querySelector(".wrapper");
  const onMouseMove = ({
    clientX
  }) => {
    const x = ((clientX / innerWidth) * 2 - 1) * (innerWidth / 4);

    TweenLite.to(".first__name .text__name, .second__name .text__name", 1, {
      x: x,
      ease: Sine.easeOut
    });
  };
  wrapper.addEventListener("mousemove", onMouseMove);
}

$(function () {
  Wrapper__init();
})
/* 발견되면 활성화시키는 라이브러리 끝 */
