$(window).on('load', function() {
  $('#thumbnail img').on('click', function() {
    let img_src = $(this).attr('src');
    $('#slideshow-image img').attr('src', img_src);
  });
});
$(function() {
  //アコーディオン下方向
  $('.js-accordion-title').on('click', function() {
    $(this)
      .next()
      .slideToggle(300);
    $(this).toggleClass('open', 300);
  });
  //アコーディオン上方向
  $('.js-accordion-up').on('click', function() {
    $(this)
      .closest('tfoot')
      .prev()
      .slideToggle(300); // tbody の開閉
    $(this).toggleClass('open', 300); // 矢印用のクラス切り替え
    // テキストを切り替える
    const textEl = $(this).find('td'); // td の中身を取得
    const currentText = textEl.text().trim(); // 現在のテキスト

    if (currentText === '表の続きを見る') {
      textEl.text('表を閉じる');
    } else {
      textEl.text('表の続きを見る');
    }
  });
  //ナビボタン
  $('#nav-button').on('click', function() {
    $('.sp-nav').slideToggle();
  });
  //トップ戻るボタン
  $('#top-button').on('click', function() {
    window.scrollTo({
      top: 0,
      left: 0,
      behavior: 'smooth'
    });
  });
  //トップ戻るボタンを表示する
  $(window).on('scroll', function() {
    console.log(window.scrollY);
    if (300 < window.scrollY) {
      $('#top-button').fadeIn();
    } else {
      $('#top-button').fadeOut();
    }
  });
});

// オガワさんのタブ作成
const tabbuttons = document.querySelectorAll('.js-tabbtn');
const tabboxs = document.querySelectorAll('.js-tabbox');
tabbuttons.forEach((button) => {
  button.addEventListener('click', (event) => {
    const currenttab = event.target.getAttribute('data-tab');
    event.target.parentNode.querySelectorAll('.js-tabbtn').forEach((tabbutton) => {
      tabbutton.classList.remove('active');
    });
    event.target.classList.add('active');
    tabboxs.forEach((box) => {
      box.classList.remove('active');
      if (box.getAttribute('data-tab') == currenttab) {
        box.classList.add('active');
      }
    });
  });
});
// 背景画像設定
$(function() {
  $('.one').each(function(i, elem) {
    var one = $(elem).offset().top;
    $(window).on('load scroll resize', function() {
      var two = $(window).height();
      var three = $(window).scrollTop();
      var showClass = 'show';
      var timing = 700; // 50px, add to css
      if (three >= one - two + timing) {
        $(elem).addClass(showClass);
      } else {
        $(elem).removeClass(showClass);
      }
    });
  });
});
// プロテインコスパ計算機
(function() {
  // フォームが存在するページのみ実行
  const form = document.getElementById('proteinCalcForm');
  if (!form) return;

  // ====== エラー / 結果エリア ======
  const errorEl = document.getElementById('proteinCalcError');
  const resultBox = document.getElementById('proteinCalcResult');

  // ====== 結果表示（メイン） ======
  const resCostPerServing = document.getElementById('resCostPerServing');
  const resCostPerProtein100g = document.getElementById('resCostPerProtein100g');

  // ====== 結果表示（サブ・根拠） ======
  const resCostPerProduct100g = document.getElementById('resCostPerProduct100g');
  const resEffectivePrice = document.getElementById('resEffectivePrice');
  const resServings = document.getElementById('resServings');
  const resTotalProtein = document.getElementById('resTotalProtein');
  const resDiscountPercentAmount = document.getElementById('resDiscountPercentAmount');
  const resDiscountYen = document.getElementById('resDiscountYen');

  // ====== 数値処理 ======
  // 小数点1桁で切り捨て
  const floor1 = (num) => Math.floor(num * 10) / 10;
  // 整数で切り捨て
  const floor0 = (num) => Math.floor(num);

  // ====== submit処理 ======
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    errorEl.textContent = '';
    resultBox.style.display = 'none';

    // ====== 入力値取得 ======
    const price = parseFloat(document.getElementById('price').value);

    const deductionYen = parseFloat(document.getElementById('deductionYen').value) || 0;

    const deductionPercent = parseFloat(document.getElementById('deductionPercent').value) || 0;

    const contentWeight = parseFloat(document.getElementById('contentWeight').value);

    const servingSize = parseFloat(document.getElementById('servingSize').value);

    // 任意入力：1食あたりタンパク質量
    const proteinPerServingRaw = document.getElementById('proteinPerServing').value;

    const proteinPerServing = proteinPerServingRaw === '' ? NaN : parseFloat(proteinPerServingRaw);

    // ====== 必須チェック ======
    if (isNaN(price) || isNaN(contentWeight) || isNaN(servingSize)) {
      errorEl.textContent = '必須項目をすべて入力してください。';
      return;
    }

    if (price <= 0 || contentWeight <= 0 || servingSize <= 0) {
      errorEl.textContent = '価格・内容量・1食あたりの量は正の数で入力してください。';
      return;
    }

    // ====== 割引率チェック ======
    if (deductionPercent < 0 || deductionPercent > 100) {
      errorEl.textContent = '割引率は0〜100％の範囲で入力してください。';
      return;
    }

    // ====== 割引計算 ======
    // ％割引 → 円引き の順で計算
    const percentDiscountAmount = price * (deductionPercent / 100);
    const effectivePrice = price - percentDiscountAmount - deductionYen;

    if (effectivePrice <= 0) {
      errorEl.textContent = '実質支払額が0円以下です。値引き内容を確認してください。';
      return;
    }

    // ====== 食数計算 ======
    const servings = contentWeight / servingSize;
    if (servings <= 0) {
      errorEl.textContent = '食数の計算に失敗しました。入力値を確認してください。';
      return;
    }

    // ====== 共通計算 ======
    const costPerServing = effectivePrice / servings;

    // 製品（粉）100gあたり価格（常に計算）
    const costPerProduct100g = (effectivePrice / contentWeight) * 100;

    // ====== タンパク質系（任意） ======
    let totalProtein = NaN;
    let costPerProtein100g = NaN;

    if (!isNaN(proteinPerServing) && proteinPerServing > 0) {
      totalProtein = servings * proteinPerServing;
      if (totalProtein > 0) {
        costPerProtein100g = (effectivePrice / totalProtein) * 100;
      }
    }

    // ====== 結果出力（メイン） ======
    resCostPerServing.textContent = floor1(costPerServing).toLocaleString();

    if (!isNaN(costPerProtein100g)) {
      resCostPerProtein100g.textContent = floor1(costPerProtein100g).toLocaleString();
    } else {
      resCostPerProtein100g.textContent = '―';
    }

    // ====== 結果出力（サブ・根拠） ======
    resCostPerProduct100g.textContent = floor1(costPerProduct100g).toLocaleString();

    resEffectivePrice.textContent = floor0(effectivePrice).toLocaleString();

    resServings.textContent = floor1(servings);

    if (!isNaN(totalProtein)) {
      resTotalProtein.textContent = floor1(totalProtein).toLocaleString();
    } else {
      resTotalProtein.textContent = '―';
    }

    resDiscountPercentAmount.textContent = deductionPercent > 0 ? floor0(percentDiscountAmount).toLocaleString() : '―';

    resDiscountYen.textContent = deductionYen > 0 ? floor0(deductionYen).toLocaleString() : '―';

    // ====== 表示 ======
    resultBox.style.display = 'block';
  });
})();
// タイマー
let countdown;
let audioCtx;
let modalOpen = false;

function initAudio() {
  if (!audioCtx) {
    audioCtx = new (window.AudioContext || window.webkitAudioContext)();
  }
}

function playGentleBell() {
  if (!audioCtx) return;

  const now = audioCtx.currentTime;

  function bell(freq, delay) {
    const osc = audioCtx.createOscillator();
    const gain = audioCtx.createGain();

    osc.type = 'sine';
    osc.frequency.setValueAtTime(freq, now + delay);

    gain.gain.setValueAtTime(0.0001, now + delay);
    gain.gain.exponentialRampToValueAtTime(0.2, now + delay + 0.01);
    gain.gain.exponentialRampToValueAtTime(0.0001, now + delay + 1.2);

    osc.connect(gain);
    gain.connect(audioCtx.destination);

    osc.start(now + delay);
    osc.stop(now + delay + 1.2);
  }

  bell(660, 0);
  bell(880, 0.15);
}

function startTimer(seconds) {
  let remaining = seconds;
  const display = document.getElementById('timerDisplay');

  clearInterval(countdown);
  updateDisplay(remaining);

  countdown = setInterval(() => {
    remaining--;
    updateDisplay(remaining);

    if (remaining <= 0) {
      clearInterval(countdown);
      playGentleBell();
      display.textContent = 'Finished';
    }
  }, 1000);
}

function updateDisplay(seconds) {
  const display = document.getElementById('timerDisplay');
  const min = String(Math.floor(seconds / 60)).padStart(2, '0');
  const sec = String(seconds % 60).padStart(2, '0');
  display.textContent = `${min}:${sec}`;
}

document.addEventListener('DOMContentLoaded', function() {
  const modal = document.getElementById('timerModal');
  const closeBtn = document.getElementById('closeBtn');

  // ページ上ボタン
  document.querySelectorAll('.timer-btn').forEach((btn) => {
    btn.addEventListener('click', function() {
      initAudio();

      const time = parseInt(this.dataset.time);

      if (!modalOpen) {
        modal.style.display = 'flex';
        modalOpen = true;
      }

      startTimer(time);
    });
  });

  // モーダル内ボタン
  document.querySelectorAll('.modal-time-btn').forEach((btn) => {
    btn.addEventListener('click', function() {
      initAudio();
      const time = parseInt(this.dataset.time);
      startTimer(time);
    });
  });

  closeBtn.addEventListener('click', function() {
    clearInterval(countdown);
    modal.style.display = 'none';
    modalOpen = false;
  });
});
