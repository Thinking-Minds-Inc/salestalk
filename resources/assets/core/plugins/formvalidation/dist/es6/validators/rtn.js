export default function e(){return{validate(e){if(e.value===""){return{valid:true}}if(!/^\d{9}$/.test(e.value)){return{valid:false}}let t=0;for(let a=0;a<e.value.length;a+=3){t+=parseInt(e.value.charAt(a),10)*3+parseInt(e.value.charAt(a+1),10)*7+parseInt(e.value.charAt(a+2),10)}return{valid:t!==0&&t%10===0}}}}