<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOOFCO</title>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/core.js"></script>
  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="css/import.css">
</head>
<body>
  <div class="buyMainContainer">
    
    <section class="project">
      <div class="buyTitle">
        <p>구매자 프로젝트 현황 : <span>견적서 접수 중</span></p>
        <h2>Buyer Project Status</h2>
      </div>
      <div class="buyButton">
        <ul>
          <li><a href="#">견적의뢰서 확인</a></li>
          <li>닫기</li>
        </ul>
      </div>
    </section>

    <section class="defaultInform">
      <div>
        <h2>구매자 견적의뢰 기본 정보</h2>
        <div>
          <ul>
            <li>
              <div>
                <label for="request">견적의뢰 No.</label>
                <input type="text" id="request">
              </div>
            </li>
            <li>
              <div>
                <label for="order">구매주문 No.</label>
                <input type="text" id="order">
              </div>
            </li>
            <li>
              <div>
                <label for="estimate_date">견적 요청일</label>
                <input type="text" id="estimate_date">
              </div>
            </li>
            <li>
              <div>
                <label for="estimate_end_date">견적 마감일</label>
                <input type="text" id="estimate_end_date">
              </div>
            </li>
            <li>
              <div>
                <label for="delivery_date">납품 요청일</label>
                <input type="text" id="delivery_date">
              </div>
            </li>
          </ul>
        </div>

        <div>
          <ul>
            <li>
              <div>
                <label for="payment">결제 조건</label>
                <input type="text" id="payment">
              </div>
            </li>
            <li>
              <div>
                <label for="request_title">의뢰 제목</label>
                <input type="text" id="request_title">
              </div>
            </li>
          </ul>
        </div>

        <div>
          <ul>
            <li>
              <div>
                <label for="transit">운송 조건</label>
                <input type="text" id="transit">
              </div>
            </li>
            <li>
              <div>
                <label for="delivery_place">납품 장소</label>
                <input type="text" id="delivery_place">
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div>
        <label for="estimate_etc">기타 견적 조건</label>
        <input type="text" id="estimate_etc">
      </div>
    </section>

    <section class="current_situation">
      <table>
        <caption>견적서 접수 현황</caption>
        <thead>
          <tr>
            <th>No.</th>
            <th>견적서 접수 일자</th>
            <th>판매자(Supplier)</th>
            <th>견적 금액(KRW)</th>
            <th>납품 예상일</th>
            <th>판매 담당자</th>
            <th>담당자 연락처</th>
            <th>견적서</th>
            <th>참가 제한</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>01</td>
            <td>2022-04-22</td>
            <td>테스트이</td>
            <td>4,343</td>
            <td>2022-04-27</td>
            <td>장영실</td>
            <td>051-222-2222</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </section>

    <section class="default_inform">
      <p class="inform_text">구매자 견적의뢰 기본 정보</p>
      <ul>
        <li>
          견적마감일 이내<span>견적서 미접수 (0개)</span>
          <i></i>
          견적종료
        </li>
        <li>
          견적마감일 이내<span>견적서 접수 (1~3개)</span>
          <i></i>
          마감일 + 7일이내 구매주문 하지 않은 경우
          <i></i>
          견적종료
        </li>
        <li>
          견적서는 선착순으로 제출한 3개의 공급업체(Supplier)에 대해서만 제공됩니다.
        </li>
      </ul>
    </section>

    <section class="send_situation">
      <table>
        <caption>구매주문서 송부 현황</caption>

        <thead>
          <tr>
            <th>No.</th>
            <th>구매주문서 송부 일자</th>
            <th>판매자(Supplier)</th>
            <th>발주 금액(KRW)</th>
            <th>요청 납품일</th>
            <th>판매 담당자</th>
            <th>담당자 연락처</th>
            <th>구매주문서</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>01</td>
            <td>2022-04-22</td>
            <td>테스트이</td>
            <td>4,343</td>
            <td>2022-04-28</td>
            <td>장영실</td>
            <td>051-222-2222</td>
            <td>OPEN</td>
          </tr>
        </tbody>
      </table>
    </section>

    <section class="precautions">
      <p>구매주문서 주의사항</p>
      <ul>
        <li>구매주문의 취소는 판매자와 사전 협의 후 진행 바랍니다.</li>
      </ul>
    </section>

    <section class="reception">
      <table>
        <caption>거래명세서 접수 현황</caption>
        <div class="situation_button">
          <ul>
            <li><a href="#">사업자등록증</a></li>
            <li><a href="#">통장사본</a></li>
          </ul>
        </div>
        <thead>
          <tr>
            <th>No.</th>
            <th>거래명세서 접수 일자</th>
            <th>판매자(Supplier)</th>
            <th>발주 금액(KRW)</th>
            <th>잔액</th>
            <th>결제 요청 금액</th>
            <th>%</th>
            <th>거래명세서</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>합계</td>
            <td>-</td>
            <td>-</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0%</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </section>
  </div>
</body>
</html>