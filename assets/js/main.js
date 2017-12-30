$(function() {
    //for quantity div
    var total;
    var price;
    var counter = 1;
    // quick contact mobile view
    var quick = $(".l6").html();
    $(".l6C").html(quick);
    var quick = $(".l7").html();
    $(".l7C").html(quick);

    // mobile navbar
    var home = $(".l1").html();
    var about = $(".l2").html();
    var menu = $(".l4").html();
    var contact = $(".l5").html();
    var socMe = $("#soc").html();
    var foot = $("#footer").html();

    $(".l1C").html(home);
    $(".l2C").html(about);
    $(".l4C").html(menu);
    $(".l5C").html(contact);
    $(".socMedia").html(socMe);
    $(".footNav").html(foot);


    $('.closeM').click(function() {
        $('.navLogo').trigger("click");
    });
    $('.navLogo').click(function() {
        $('.nav-sm-m').toggleClass('nav-sm-s');
    });

    var s = $('.socMedia').find('img');
    s.removeClass('wow');

    // cart
    $("#item_count").text($(".cart_item").length);

    $("#close-quantity").click(function() {
        $("#desc-dish").hide();
    });

    $(".buy-btn").click(function() {
        $("#desc-dish").show();
        var name = $(this).closest(".inner").find("h3").html();
        price = $(this).closest(".inner").find("mark").html();
        price = parseInt(price);
        var desc = $(this).closest(".inner").find("p").html();
        var temp = " ";
        var temp2 = " ";
        var temp3 = " ";
        temp += name;
        temp2 += price;
        temp3 += desc;
        total = temp2;
        counter = 1;
        $("#dish-name").html(temp);
        $("#dish-cost").text(temp2);
        $("#dish-desc").html(temp3);
    });
    //selecting quantity
    $("#counter").text(counter);
    $("#add").click(function() {
        counter = counter + 1;
        $("#counter").text(counter);
        if (counter > 1) {
            total = price * counter;
            $("#subtract").css("visibility", "visible");
        }

        $("#dish-cost").text(total);
    });

    $("#subtract").click(function() {
        counter = counter - 1;
        if (counter > 1) {
            total = price * counter;
        } else if (counter = 1) {
            total = price * counter;
            $("#subtract").css("visibility", "hidden");
        }

        $("#counter").text(counter);
        $("#dish-cost").text(total);
    });

    $("#add-cart").click(function() {
        $("#desc-dish").fadeOut();
        $("#counter").text("1");
        var i_name = $("#dish-name").html();
        var i_price = $("#dish-cost").html();
        var sum = 0;
        var item_name = $("<span class='cartName'></span>").html(i_name);
        var rupee = $("<span class='rupee'></span>").text("₹ ");
        var item_price = $("<span class='cartPrice'></span>").html(i_price);
        var edit = $("<a class='dish-edit'><i class='fa fa-pencil' aria-hidden='true'></i></a>")
        var del = $("<span class='dish-remove' onclick='remove()'><i class='fa fa-trash-o' aria-hidden='true'></i></span>");
        var li = $("<div class='cart_item'></div>").append(item_name, rupee, item_price, edit, del);
        $("#cart-table").append(li);
        $("#item_count").text($(".cart_item").length);

        $(".dish-edit").click(function() {

            $("#desc-dish").show();
            $("#dish-cost").html(" ");
            $("#tot").text(" ");
            $("#close-cart").trigger("click");
            var name_edit = $(this).closest(".cart_item").find(".cartName").html();
            $(this).closest(".cart_item").remove();

            var price_edit = $(this).closest(".cart_item").find(".cartPrice").html();

            $("#dish-name").html(name_edit);
            $("#dish-cost").text(price_edit);
            $("#cart").fadeOut();
            $("#item_count").text($(".cart_item").length);
        });

        $('.cartPrice').each(function() {
            sum += parseFloat($(this).text());
        });
        $("#tot").text(sum);
        // Or this.innerHTML, this.innerText   

        //delete button
        $(".dish-remove").click(function() {
            $("#close-cart").trigger("click");
            sum = 0;
            $(this).closest(".cart_item").remove();
            $("#item_count").text($(".cart_item").length);
            $('.cartPrice').each(function() {
                sum += parseFloat($(this).text());
            });
            $("#tot").text(sum);
        });
    });

    var cat = $('.catUl').html();
    $('.catNew').html(cat);

    //for cart item div

    $("#close-cart").click(function() {
        $("#show-cart").trigger("click");
    });

    $("#show-cart").click(function() {
        // $("#cart").show();
        $('.your-cart').toggleClass('your-cartM');
    });

    //for scroll


    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });
        var a = $(".menuBtnClk").children();
        a.addClass('ulA');
        $('.ulA').click(function(){
          $('.closeM').trigger("click");
        });
});

