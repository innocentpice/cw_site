$(document).ready(() => {
    var tour_template = '<div class="popover" role="tooltip"> <div class="arrow"></div> <h3 class="popover-title"></h3> <div class="popover-content"></div> <div class="popover-navigation"> <div class="btn-group"></div> <button class="btn btn-sm btn-default btn-block" data-role="next">ต่อไป &raquo;</button></div> </div>';
    var tour_template_end = '<div class="popover" role="tooltip"> <div class="arrow"></div> <h3 class="popover-title"></h3> <div class="popover-content"></div> <div class="popover-navigation"> <div class="btn-group"></div> <button class="btn btn-sm btn-default btn-block" data-role="end">ปิดการแนะนำ</button> </div> </div>';
    window.tour_checkstatus = new Tour({
        debug: false,
        steps: [{
            path: "/",
            template: tour_template,
            element: "#checkstatus_text",
            placement: "bottom",
            title: "<strong>Step 1</strong>",
            content: "กรอกรหัสสั่งซื้อสินค้า",
            onNext: () => {
                $('#checkstatus_text').val('test');
            }
        }, {
            path: "/",
            template: tour_template,
            element: "#checkstatus_btn",
            placement: "top",
            title: "<strong>Step 2</strong>",
            content: "Click ! ที่ปุ่มเพื่อตรวจสอบคำสั่งซื้อ",
            reflex: true,
            onNext: () => {
                $('#checkstatus_text').val('test');
                $('#checkstatus_btn').click();
            }
        }, {
            path: "/checkjob",
            element: "#timeline",
            template: tour_template,
            placement: "top",
            title: "<strong>สถานะสินค้าปัจจุบัน</strong>",
            content: "แสดงสถานะต่างๆของสินค้า<br>วันที่รับออเดอร์<br>กำหนดการส่งมอบสินค้า",
            orphan: true,
            redirect: false,
            backdrop: true,
            backdropPadding: 5,
            delay: 1000
        }, {
            path: "/checkjob",
            element: "#job_info",
            template: tour_template,
            placement: "top",
            title: "<strong>ข้อมูลของสินค้า</strong>",
            content: "แสดงรายละเอียดต่างๆของสินค้า",
            backdrop: true,
            backdropPadding: 5,
            delay: 1000
        }, {
            path: "/checkjob",
            element: "#job_log",
            template: tour_template_end,
            placement: "top",
            title: "<strong>รายละเอียดสถานะสินค้า</strong>",
            content: "รายละเอียดสถานะต่างๆของสินค้า",
            backdrop: true,
            backdropPadding: 5,
            delay: 1000
        }]
    });

    // Initialize the tour
    window.tour_checkstatus.init();


    $('#checkstatus_help').click(() => {
        window.tour_checkstatus.restart();
    });
});
