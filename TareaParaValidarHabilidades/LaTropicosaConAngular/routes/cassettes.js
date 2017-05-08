var express = require('express');
var router = express.Router();
var mongojs = require('mongojs');
var db = mongojs('mongodb://localhost:27017/LaTropicosa', ['cassettes']);

/* Obtener todo de cassettes */
router.get('/cassettes', function(req, res, next) {
    db.cassettes.find(function(err, cassettes) {
        if (err) {
            res.send(err);
        } else {
            res.json(cassettes);
        }
    });
});

/* Obtener por ID */
router.get('/cassettes/:id', function(req, res, next) {
    db.cassettes.findOne({
        _id: mongojs.ObjectId(req.params.id)
    }, function(err, cassettes) {
        if (err) {
            res.send(err);
        } else {
            res.json(cassettes);
        }
    });
});

/* POST/Guardar a cassettes */
router.post('/cassettes', function(req, res, next) {
    var cassettes = req.body;
    if (!cassettes.ID) {
        res.status(400);
        res.json({
            "error": "Invalid Data",
            'cassettes': cassettes
        });
    } else {
        db.cassettes.save(cassettes, function(err, result) {
            if (err) {
                res.send(err);
            } else {
                res.json(result);
            }
        })
    }
});

/* Actualizar */
router.put('/edit/:id', function(req, res, next) {
    var cassettes = req.body;
    
    var updObj = {};
    if (cassettes.isHere) {
        updObj.isHere = cassettes.isHere;
    }
    if (cassettes.ID) {
        updObj.ID = cassettes.ID;
    }
    if (!updObj) {
        res.status(400);
        res.json({
            "error": "Invalid Data"
        });
    } else {
        db.cassettes.update({
            _id: mongojs.ObjectId(req.params.id)
        }, updObj, {}, function(err, result) {
            if (err) {
                res.send(err);
            } else {
                res.json(result);
            }
        });
    }
});

/* Eliminar */
router.delete('/delete/:id', function(req, res) {
    db.cassettes.remove({
        _id: mongojs.ObjectId(req.params.id)
    }, '', function(err, result) {
        if (err) {
            res.send(err);
        } else {
            res.json(result);
        }
    });
});

module.exports = router;