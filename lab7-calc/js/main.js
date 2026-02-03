class Calculator {
    constructor(cnt) {
        const Calc = {};
        if (!$(cnt).find('.js-calcMain')) {
            Calc.err.errMsg.push('Container width "js_calcMain" class is missing which is critical error!');
            Calc.criticalErr = true;

            return false;
        }else if (!$(cnt).find('.calc-main js-val')) {
            Calc.errMsg.push('Container width "js_val" class is missing which is critical error!');
            Calc.criticalErr = true;

            return false;
        }else {
            Calc.err = false;           // Error TRUE or FALSE
            Calc.errMsg = [];           // Error message array
            Calc.criticalErr = false;   // Critical error TRUE or FALSE

            Calc.cnt = $(cnt);             // Main Calculator container
            Calc.input = Calc.cnt.find('.js-val');    // Screen container
            Calc.memory = false;
            Calc.value = Calc.cnt.find('.js-val').val();        // Memorizing value
            if(Calc.value === '') {
                Calc.value= 0;
            }
            // If next number needs to be separated by commant compiled value
            if (Calc.input.attr('separator') === undefined) {
                Calc.input.attr('separator', -1);
            }
            Calc.action = false;        // Action which was clicked
        }
        this.data = Calc;
    }
    Calc = this;

    init = function() {
        console.log(Calc.data);
        Calc.data.cnt.find('.js-numBtn').on('click', function() {
            if(Calc.data.value == 0 || Calc.data.input.attr('memorized') == 1) {
                Calc.data.value = $(this).text();
                Calc.data.input.attr('memorized', 0);
            } else {
                const valNr = Number(Calc.data.value);
                if (Number.isInteger(valNr) && Calc.data.input.attr('separator') == 1) {
                    Calc.data.value = Calc.data.value + '.' + $(this).text();
                    Calc.data.input.attr('separator', 0);
                } else if(Calc.data.input.attr('separator') == 0 || Calc.data.input.attr('separator') == -1) {
                    Calc.data.value = Calc.data.value + '' + $(this).text();
                }
            }
            Calc.data.input.val(Calc.data.value);
        });
        Calc.data.cnt.find('.js-actionBtn').on('click', function() {
            Calc.data.action = $(this).text();
            switch(Calc.data.action) {
                case '.':
                    const valNr = Number(Calc.data.value);
                    if(Number.isInteger(valNr) && valNr == Calc.data.value
                        && Calc.data.input.attr('separator') == -1) {
                        Calc.data.input.attr('separator', 1);
                        console.log('Kablelis');
                    }
                    break;
                    // code block
                case '+/-':
                    Calc.data.value = Calc.data.value*(-1);
                    break;
                case '*':
                    Calc.data.memory = Calc.data.value;
                    Calc.data.input.attr('memorized', 1);
                    break;
                default:
            }
        });


    }
}

const Calc = new Calculator('.js-calcMain');
Calc.init();


