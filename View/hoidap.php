<style>
    

 .question-list {
    list-style-type: none;
    padding: 0;
 }

.question {
    margin-bottom: 20px;
    border: 1px solid #ccc;
} 

.question-title {
    display: block;
    width: 100%;
    border: none;
    outline: none;
    cursor: pointer;
}

.question-content {
    display: none;
    padding-left: 20px;
}

.question-content p {
    margin: 0;
    font-style: italic;
    color: #888;
    text-align: center;
}

</style>
<div class="containern" style="margin-top: 140px;">
        <h4 style="text-align: center;margin-bottom: 16px;">CÂU HỎI THƯỜNG GẶP </h4>
        
        <ul class="question-list">
            <li class="question">
                <button class="question-title">1. Hình thức thanh toán nào được chấp nhận?</button>
                <div class="question-content">
                    <p>Chúng tôi chấp nhận thanh toán bằng thẻ tín dụng và thanh toán khi nhận hàng</p>
                </div>
            </li>
            
            <li class="question">
                <button class="question-title">2. Có phí vận chuyển không?</button>
                <div class="question-content">
                    <p>Chúng tôi cung cấp miễn phí vận chuyển cho đơn hàng từ 500.000 VNĐ trở lên. Đối với đơn hàng dưới mức này, phí vận chuyển sẽ được tính theo tỷ lệ cụ thể.</p>
                </div>
            </li>
            
            <li class="question">
                <button class="question-title">3. Bao lâu sau khi đặt hàng sẽ nhận được?</button>
                <div class="question-content">
                    <p>Thời gian giao hàng thường là từ 2 - 5 ngày làm việc tùy thuộc vào địa chỉ nhận hàng và phương thức vận chuyển.</p>
                </div>
            </li>
        </ul>
    </div>
    
    <script>
const questions = document.querySelectorAll('.question-title');

questions.forEach(question => {
    question.addEventListener('click', () => {
        const answer = question.nextElementSibling;
        answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
    });
});

    </script>