/* *
 *
 *  Highcharts cylinder - a 3D series
 *
 *  (c) 2010-2021 Highsoft AS
 *
 *  Author: Kacper Madej
 *
 *  License: www.highcharts.com/license
 *
 *  !!!!!!! SOURCE GETS TRANSPILED BY TYPESCRIPT. EDIT TS FILE ONLY. !!!!!!!
 *
 * */
'use strict';
import CylinderComposition from './CylinderComposition.js';
import CylinderPoint from './CylinderPoint.js';
import CylinderSeriesDefaults from './CylinderSeriesDefaults.js';
import SeriesRegistry from '../../Core/Series/SeriesRegistry.js';
const { column: ColumnSeries } = SeriesRegistry.seriesTypes;
import U from '../../Core/Utilities.js';
const { extend, merge } = U;
/* *
 *
 *  Class
 *
 * */
/**
 * The cylinder series type.
 *
 * @requires module:highcharts-3d
 * @requires module:modules/cylinder
 *
 * @private
 * @class
 * @name Highcharts.seriesTypes.cylinder
 *
 * @augments Highcharts.Series
 */
class CylinderSeries extends ColumnSeries {
    constructor() {
        /* *
         *
         *  Static Properties
         *
         * */
        super(...arguments);
        /* *
         *
         *  Properties
         *
         * */
        this.data = void 0;
        this.options = void 0;
        this.points = void 0;
    }
}
CylinderSeries.compose = CylinderComposition.compose;
CylinderSeries.defaultOptions = merge(ColumnSeries.defaultOptions, CylinderSeriesDefaults);
extend(CylinderSeries.prototype, {
    pointClass: CylinderPoint
});
SeriesRegistry.registerSeriesType('cylinder', CylinderSeries);
/* *
 *
 *  Default Export
 *
 * */
export default CylinderSeries;
