<template>
    <div>
        <div class="jumbotron">
            <h1 class="display-3">{{ name }}</h1>
            <p class="lead">Jumbo helper text</p>
            <hr class="my-2" />

        </div>
    </div>
</template>

<style lang=""></style>

<script>
// สร้างตัวแปรเก็บ URL
const urlAPI = "http://localhost/t/laravelspa/public/api/";
const auth = {
    headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
        Authorization:
            "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNzk4M2E0YTNiNzg4NjMwYjU2MWE5NTY2ZDhhNjZlMmE4Njk3YTIzZWNlNGY2N2QwYzk1MzI3ZTJmM2VkMjkzMDhlNjhmM2E1YjZjN2Y4NDAiLCJpYXQiOjE2MDU5Mzc1MzYsIm5iZiI6MTYwNTkzNzUzNiwiZXhwIjoxNjM3NDczNTM2LCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.wrdUIApkO1TWaTkJtZqVG02Pn4RhVXwHwwHWm8nyTlGyM8aKpoV3mWdDz5ctWE0gjq02ZxCGqLCxS4XR0fSLeSPN7WdtA5zePK_r8kYV-VsDtbguhjW-Qgy-be-S5sm02BSJ3QMBwnjIngzp77ZRAjQWY19ZwU5-aSQS9uP4gx9gFReSy-zqYT8E4Z6YRuDzxFRp43l4Plqz9IKqcn1Ss2OXIXO7Q8q2MseWXCklciGRKXiqxLZH41yYHIxv1OErJtPXNYufCxajkk3VB5RHxi6Ml6AkRk9KckZ_7DTgNrE3NM3U73grnRNJ4zmgvbxdqjFyedv8ighY5ODfOdaUSxklT-xbQNlFubn850b4WX9bPrh3tzG16D5jeaE25EuYPLQNFL_z6ERCD6IKsfMNXGxCaOeQhhlWHvuUc3Z7XxtDXFMGsH_skdH7b7ZfUitBACOWbfq_dUkNMu0cLj5uFUp159v23eUPcubToxBnpNyp2ew25q3lDV9qsQFVh6EbBh2dTHFqbh36F1AfLZ3FpKBMuVj_HM40393bF1bcylGyXakb8ela26G5dtNrwW80-2xKNfAGVWnhIgh31RGYn0cZaWJRfb35oH80jnYbaXzMxOEDx22B-D6dWAXvgQtwdw7MF7oMfcUAYLBabI23UTahQrb6Kwt2ciSqcuWiYgs"
    }
};
export default {
    data() {
        return {
            name: "NOPPARAT",
            product: []
        };
    },
    created() {
        const request = axios
            .get(urlAPI + "products", auth)
            .then(response => response.data)
            .then(data => {
                this.product = data;
            });
    }
};
</script>
