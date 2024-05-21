const setCookie = (name, value) => {
  document.cookie = `${name}=${value}`;
};
setCookie("user", "samikshya");

const getCookie = (name) => {
  const cookies = document.cookie;

  const cookiesArray = cookies.split(";");
  cookiesArray.forEach((cookie) => {
    const cookieNameAndValue = cookie.trim().split("=");
    if (cookieNameAndValue[0] == name) {
      console.log(cookieNameAndValue[1]);
    }
  });
};
getCookie("username");
