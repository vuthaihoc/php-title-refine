# PHP title refine


## Issue

Có các tiêu đề bị chuyển đổi lỗi dẫn đến bị tác thành các từ rời rạc
Dựa vào nội dung để tái tạo lại tiêu đề (đoạn nội dung thường không bị)

## A test result

```
"Origin: Đ I Ề U Đ Ó TÙY THU Ộ C VÀO B Ạ N (27-29) (Length 1427)"
"=>      ĐIỀU ĐÓ TÙY THUỘC VÀO BẠN (27-29) (Length 1427)"
"Origin: "
"Origin: BI Ế N N ƯỚ C THÀNH R ƯỢ U (29-34) (Length 2594)"
"=>      BIẾN NƯỚC THÀNH RƯỢU (29-34) (Length 2594)"
"Origin: "
"Origin: B Ạ N PH Ả I LÀ CHÍNH MÌNH (34-36) (Length 1676)"
"=>      BẠN PHẢI LÀ CHÍNH MÌNH (34-36) (Length 1676)"
"Origin: "
"Origin: ĐẶ T CHÂN LÊN N ƯỚ C M Ỹ (36-39) (Length 2308)"
"=>      ĐẶT CHÂN LÊN NƯỚC MỸ (36-39) (Length 2308)"
"Origin: "
"Origin: S Ự LÊN NGÔI C Ủ A DOANH NHÂN (39-43) (Length 3002)"
"=>      SỰ LÊN NGÔI CỦA DOANH NHÂN (39-43) (Length 3002)"
"Origin: "
"Origin: H Ọ C KINH DOANH (43-45) (Length 1433)"
"=>      HỌC KINH DOANH (43-45) (Length 1433)"
"Origin: "
"Origin: BI Ế N ĐỔ I TH Ế GI Ớ I R ƯỢ U (45-46) (Length 1320)"
"=>      BIẾN ĐỔI THẾ GIỚI RƯỢU (45-46) (Length 1320)"
"Origin: "
"Origin: 1. Chu k ỳ s ố ng c ủ a s ả n ph ẩ m (28-31) (Length 2297)"
"=>      1. Chu kỳ sống của sản phẩm (28-31) (Length 2297)"
"Origin: "
"Origin: 3. Các chi ế n l ượ c marketing theo chu k ỳ s ố ng c ủ a s ả n ph ẩ m (31-35) (Length 3023)"
"=>      3. Các chiến lược marketing theo chu kỳ sống của sản phẩm (31-35) (Length 3023)"
"Origin: "
"Origin: M Ụ C TIÊU MARKETING (35-42) (Length 3023)"
"=>      MỤC TIÊU MARKETING (35-42) (Length 3023)"
"Origin: "
"Origin: TR Ậ N Đ ÔNG B Ộ ĐẦ U 28 2911258 (26-31) (Length 3011)"
"=>      TRẬN ĐÔNG BỘ ĐẦU 28 2911258 (26-31) (Length 3011)"
"Origin: "
"Origin: TR Ậ N NH Ư NGUY Ệ T V Ạ N KI Ế P V Ĩ NH BÌNH 671285 (31-32) (Length 774)"
"=>      TRẬN NHƯ NGUYỆT VẠN KIẾP VĨNH BÌNH 671285 (31-32) (Length 774)"
"Origin: "
"Origin: TR Ậ N VÂN ĐỒ N 11288 (32-35) (Length 1633)"
"=>      TRẬN VÂN ĐỒN 11288 (32-35) (Length 1633)"
"Origin: "
"Origin: TR Ậ N B Ạ CH ĐẰ NG N Ă M (35-37) (Length 1623)"
"=>      TRẬN BẠCH ĐẰNG NĂM (35-37) (Length 1623)"
"Origin: "
"Origin: TR Ậ N THÀNH Đ A BANG 11407 (37-40) (Length 2905)"
"=>      TRẬN THÀNH ĐA BANG 11407 (37-40) (Length 2905)"
"Origin: "
"Origin: TR Ậ N THÀNH Đ A BANG (40-43) (Length 1860)"
"=>      TRẬN THÀNH ĐA BANG (40-43) (Length 1860)"
"Origin: "
"Origin: TR Ậ N T Ố T ĐỘ NG CHÚC ĐỘ NG 7111426 (43-46) (Length 2349)"
"=>      TRẬN TỐT ĐỘNG CHÚC ĐỘNG 7111426 (43-46) (Length 2349)"
"Origin: "
"Origin: C. CHA M Ẹ CHA M Ẹ RU Ộ T CHA M Ẹ V Ợ CH Ồ NG CHA M Ẹ K Ế"
"=>      C. CHA MẸ CHA MẸ RUỘT CHA MẸ V Ợ CH Ồ NG CHA MẸ K Ế"
"Origin: "
"Origin: H Ồ S Ơ CH Ứ NG MINH NG ƯỜ I PH Ụ THU Ộ C"
"=>      HỒ SƠ CHỨNG MINH NGƯỜI PHỤ THUỘC"
"Origin: "
"Origin: Thu ế su ấ t đố i v ớ i các kho ả n thu nh ậ p khác"
"=>      Thuế suất đối với các khoản thu nhập khác"
"Origin: "
"Origin: Hoàn thu ế"
"=>      Hoàn thuế"
"Origin: "
"Origin: "
"Origin: Ki ế n trúc Vi ệ t Nam t ừ n ă m 1975 đế n (26-40) (Length 416)"
"=>      Kiến trúc Việt Nam từ năm 1975 đến (26-40) (Length 416)"
"Origin: "
"Origin: M ụ c tiêu (40-42) (Length 918)"
"=>      Mục tiêu (40-42) (Length 918)"
"Origin: "
"Origin: IV.4. Máy bi ế n dòng ph ụ cho b ả o v ệ so l ệ ch"
"=>      IV.4. Máy biến dòng phụ cho bảo vệ so lệch"
"Origin: "
"Origin: V. B Ả O V Ệ SO L Ệ CH KHI CÓ DÒNG T Ừ HOÁ NH Ả Y V Ọ T HI Ệ N T ƯỢ NG QUÁ KÍCH T Ừ MBA"
"=>      V. BẢO VỆ SO LỆCH KHI CÓ DÒNG T Ừ HOÁ NHẢY V Ọ T HIỆN TƯỢNG QUÁ KÍCH T Ừ MBA"
"Origin: "
"Origin: VI. MỘT SỐ SƠ ĐỒ BẢO VỆ TIÊU BIỂU CHO MBA Các ký hi ệ u trên s ơ đồ"
"=>      VI. MỘT SỐ SƠ ĐỒ BẢO VỆ TIÊU BIỂU CHO MBA Các ký hiệu trên sơ đồ"
"Origin: "
"Origin: i3. Các hình th ứ c t ồ n t ạ i c ủ a ch ủ th ể th ẩ m m ỹ (26-28) (Length 1756)"
"=>      i3. Các hình thức tồn tại của chủ thể thẩm mỹ (26-28) (Length 1756)"
"Origin: "
"Origin: 2. Đặ c tr ư ng th ẩ m m ỹ c ủ a ngh ệ thu ậ t (31-33) (Length 1511)"
"=>      2. Đặc trưng thẩm mỹ của nghệ thuật (31-33) (Length 1511)"
"Origin: "
"Origin: 3. Các lo ạ i hình ngh ệ thu ậ t và cách th ưở ng th ứ c ngh ệ thu ậ t (33-37) (Length 3002)"
"=>      3. Các loại hình nghệ thuật và cách thưởng thức nghệ thuật (33-37) (Length 3002)"
"Origin: "
"Origin: VI. GIÁO D Ụ C TH Ẩ M M Ỹ (40-43) (Length 1303)"
"=>      VI. GIÁO DỤC THẨM MỸ (40-43) (Length 1303)"
"Origin: "
"Origin: Capture m ộ t t ệ p audio dùng Capture Wizard 1 Vào menu Tools ch ọ n Capture (27-29) (Length 484)"
"=>      Capture một tệp audio dùng Capture Wizard 1 Vào menu Tools chọn Capture (27-29) (Length 484)"
"Origin: "
"Origin: L ư u và xu ấ t b ả n b ả n trình di ễ n 1 Vào menu File ch ọ n Pack and Go (29-31) (Length 1561)"
"=>      Lưu và xuất bản bản trình diễn 1 Vào menu File chọn Pack and Go (29-31) (Length 1561)"
"Origin: "
"Origin: đố i T ượ ng Có th ể ch ọ n nhi ề u câu tr ả l ờ i (31-32) (Length 2080)"
"=>      đối T ượ ng Có thể chọn nhiều câu trả lời (31-32) (Length 2080)"
"Origin: "
```