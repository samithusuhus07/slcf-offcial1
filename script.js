function switchLang(lang) {
  if (lang === 'si') {
    document.getElementById("hero-title").textContent = "ශ්‍රී ලංකා ක්‍රිකට් නිළ වෙබ් අඩවියට පිළිගනිමු";
    document.getElementById("hero-subtitle").textContent = "ශ්‍රී ලංකා ක්‍රිකට් තරඟ සහ පුවත් සඳහා ඔබේ මධ්‍යස්ථානයයි.";
  } else {
    document.getElementById("hero-title").textContent = "Welcome to SLCF Official Website";
    document.getElementById("hero-subtitle").textContent = "Your hub for Sri Lanka cricket matches and news.";
  }
}

